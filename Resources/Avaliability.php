<?php
namespace Resources;

use stdClass;
use Lightroom\Packager\Moorexa\RouterMethods;
use function Lightroom\Templates\Functions\{render};
use function Lightroom\Requests\Functions\{post, get};
use function Lightroom\Database\Functions\{map, db};
use Lightroom\Packager\Moorexa\Interfaces\ResourceInterface;
/**
 * @package Route Avaliability
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Avaliability implements ResourceInterface
{
    /**
     * @var string $propertyId
     */
    private $propertyId = '';

    /**
     * @var object $data
     */
    private $data; 

    /**
     * @var int $startTimeStamp
     */
    private $startTimeStamp = 0;

    /**
     * @var int $endTimeStamp
     */
    private $endTimeStamp = 0;

    /**
     * @var array $avaliabilityCalendar
     */
    private $avaliabilityCalendar = [];

    /**
     * @var string $tableName
     */
    private $tableName = 'room_avaliability';

    /**
     * @method ResourceInterface onRequest
     * @param RouterMethods $method
     * @return void
     * 
     * Here is a basic example of how this works.
     * $method->get('hello/{name}', 'methodName');
     * 
     * Where "methodName" is a public method within class.
     * Hope it's simple enough?
     */
    public function onRequest(RouterMethods $method) : void
    {
        // manage request
        $method->get('property-avaliability/{propertyId}', 'generatePropertyAvalibility');
        $method->post('property-avaliability/{propertyId}', 'updatePropertyAvalibility');
        $method->get('print-property-avaliability/{catid}/{propertyId}/{checkin}/{checkout}', 'printPropertyAvaliableRooms');
    }

    /**
     * @method Avaliability generatePropertyAvalibility
     * @param string $propertyId
     * @return void
     */
    public function generatePropertyAvalibility(string $propertyId) : void
    {
        // create avaliability if it does not exists for current year
        $this->createAvaliabilityRowIfNotExistsForThisYear($propertyId);

        // load start time stamp
        $this->startTimeStamp = get()->has('start_time_stamp') ? intval(get()->start_time_stamp) : 0;

        // load end time stamp
        $this->endTimeStamp = get()->has('end_time_stamp') ? intval(get()->end_time_stamp) : 0;

        // get room category and base fare
        $rooms = $this->getPropertyRoomCategory($propertyId);

        // print data
        render([
            'rooms'     => $rooms,
            'calendar'  => $this->loadRoomAvaliability($propertyId)
        ]);
    }

    /**
     * @method Avaliability updatePropertyAvalibility
     * @param string $propertyId
     * @return void
     */
    public function updatePropertyAvalibility(string $propertyId) : void 
    {
        // @var object $data 
        $data = json_decode(html_entity_decode(post()->data));

        // get timestamp
        $timeStamp = $data->timestamp;

        // get avaliability for the following year
        $query = db($this->tableName)->get('calendar, avaliabilityid')
        ->where('propertyid = ? and year = ?', $propertyId, intval(date('Y', $timeStamp)))
        ->go();

        // do we have a record
        if ($query->rowCount() > 0) :

            // fetch result
            $query = $query->fetch(FETCH_OBJ);

            // load the calendar
            $calendar = json_decode(stripslashes($query->calendar));

            // populate data
            $roomid = $data->roomid;

            // get category
            $category = $data->category;

            // load room ID
            if (is_object($calendar) && isset($calendar->{$roomid})) :
                if (isset($calendar->{$roomid}->{$timeStamp})) :
                    $calendar->{$roomid}->{$timeStamp}->{$category} = $data->value;
                else:
                    $calendar->{$roomid}->{$timeStamp} = [
                        $data->category => $data->value
                    ];
                endif;
            else:
                // load data
                if (is_object($calendar)) :
                    $calendar->{$roomid} = [
                        $timeStamp => [
                            $data->category => $data->value
                        ]
                    ];
                elseif (is_array($calendar)) :
                    $calendar[$roomid] = [
                        $timeStamp => [
                            $data->category => $data->value
                        ]
                    ];
                endif;
            endif;

            var_dump($calendar);
            
            // save now
            db($this->tableName)->update([
                'calendar' => json_encode($calendar)
            ])->where('avaliabilityid = ?', $query->avaliabilityid)->go();

        endif;
    }

    /**
     * @method Avalibility checkPropertyAvaliability
     * @param string $categoryId
     * @param string $propertyId
     * @param string $checkIn
     * @param string $checkOut
     */
    public function printPropertyAvaliableRooms(string $roomCategoryId, string $propertyId, string $day, string $tomorrow)
    {
        // check get room number and roomid
        $rooms = db('room')->get('`number`,roomid,propertyid')->where('category = ? and status = ?', $roomCategoryId, 1)
        ->go();

        // @var int $avaliability
        $avaliability = $rooms->rowCount();

        // @var array $result
        $result = [];

        // avaliable rooms
        $avaliableRooms = [];

        // format day
        $day = strlen(strval($day)) > 10 ? substr(strval($day), 0, 10) : $day;
        $tomorrow = strlen(strval($tomorrow)) > 10 ? substr(strval($tomorrow), 0, 10) : $tomorrow;

        // get all rooms
        if ($rooms->rowCount() > 0) while($room = $rooms->fetch(FETCH_OBJ)) :

            // check for room in reservation
            $reservations = db('reservation')->get('checkindate,checkoutdate,rooms,booking,checkedin,checkedout')
            ->where('cancelled = ? and noshow = ?')
            ->bind(0,0)
            ->concat("and (checkindate = :cday or checkoutdate = :cday or (checkoutdate > :cday and checkoutdate <= :tom)) and (rooms LIKE '%$roomCategoryId%') and property = :pid and checkedout = 0")
            ->bind(['cday' => $day, 'tom' => $tomorrow, 'pid' => $propertyId])
            ->go();

            // check reservation
            if ($reservations->rowCount() > 0) while ($row = $reservations->fetch(FETCH_OBJ)) :

                // read room category
                $roomCategory = json_decode($row->rooms)[0];

                // check room and number
                if ($roomCategory->room == $roomCategoryId && $roomCategory->number == $room->number) :

                    $data = (object) [
                        'checkin'   => intval($row->checkindate),
                        'checkout'  => intval($row->checkoutdate),
                        'checkedin' => intval($row->checkedin),
                        'booking'   => $row->booking
                    ];


                    // checked out??
                    if ($data->checkedin == 1) :

                        // add checked out
                        $data->checkedout = $row->checkedout;

                    endif;

                    // push data
                    $result[$room->number][] = $data;

                endif;

            endwhile;

            // check lodging
            $lodging = db('lodging')->get('booking,checkin,checkout,checkincount,checkedout,rooms')
            ->where('checkedout = ?')
            ->bind(0)
            ->concat("and (checkin = :cday or checkout = :cday or (checkout > :cday and checkout <= :tom)) and (rooms LIKE '%$room->roomid%') and propertyid = :pid and checkedout = 0")
            ->bind(['cday' => $day, 'tom' => $tomorrow, 'pid' => $propertyId])
            ->go();

            if ($lodging->rowCount() > 0) while($l = $lodging->fetch(FETCH_OBJ)) :

                // check booking
                $booking = db('reservation')->get('id')->where('booking = ?', $l->booking)->go();

                $result[$room->number][] = (object) [
                    'checkin'       => intval($l->checkin),
                    'checkout'      => intval($l->checkout),
                    'checkedin'     => intval($l->checkincount),
                    'checkedout'    => intval($l->checkedout),
                    'booking'       => $l->booking
                ];

            endwhile;


            // cannot find room
            if (!isset($result[$room->number])) :

                // check reservation table
                $reservations = db('reservation')->get('checkindate,checkoutdate,rooms,booking,checkedin')
                ->where('cancelled = ? and noshow = ?')
                ->bind(0,0)
                ->concat("and ((checkoutdate > :tom and checkindate <= :cday) or (checkindate < :cday and checkoutdate >= :tom)) and (rooms LIKE '%$roomCategoryId%') and property = :pid")
                ->bind(['cday' => $day, 'tom' => $tomorrow, 'pid' => $propertyId])
                ->go();

                // run count
                if ($reservations->rowCount() > 0) while ($row = $reservations->fetch(FETCH_OBJ)) :

                    // read room category
                    $roomCategory = json_decode($row->rooms)[0];

                    // check room and number
                    if ($roomCategory->room == $roomCategoryId && $roomCategory->number == $room->number) :

                        // reduce avaliability
                        $result[$room->number] = [];

                    endif;

                endwhile;

                // check lodging
                $lodging = db('lodging')->get('checkin,checkout,checkincount,checkedout,rooms')
                ->where('checkedout = ?')
                ->bind(0)
                ->concat("and ((checkout > :tom and checkin <= :cday) or (checkin < :cday and checkout >= :tom)) and (rooms LIKE '%$room->roomid%') and propertyid = :pid")
                ->bind(['cday' => $day, 'tom' => $tomorrow, 'pid' => $propertyId])
                ->go();

                // reduce now
                if ($lodging->rowCount() > 0) while($l = $lodging->fetch(FETCH_OBJ)) :

                    //if ($avaliability > 1) $avaliability--;
                    $result[$room->number] = [];

                endwhile;

            endif;

            // add to avaliable room 
            $avaliableRooms[$room->number] = true;

        endwhile;

        // load all result
        if (count($result) > 0) foreach($result as $roomNumber => $resultArray) :

            // @var array $roomsLogged
            $roomsLogged = [];

            if (count($resultArray) == 0) :

                // show room cat
                $avaliability--;

                // remove now
                if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;

            else:

                foreach ($resultArray as $row) :

                    if (isset($row->checkedout)) :

                        if ($roomNumber == 103) var_dump($row);

                        // avaliable in lodging table
                        if ($row->checkout == $day) :

                            if ($day == strtotime(date('m/d/Y')) ) : 

                                // passed 12
                                //if (intval(date('H')) < 12) : $avaliability--; endif;

                            else:

                                //$avaliability--;

                            endif;

                        else:

                            // var_dump($roomNumber);

                            if ($row->checkout > $day || $row->checkin == $day) :

                                $avaliability--;

                                // remove now
                                if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;

                            else:

                                // var_dump($roomNumber);

                            endif;

                        endif;

                        // record now
                        $roomsLogged[$roomNumber] = true;

                    elseif ($row->checkedin == 0) :

                        if (!isset($roomsLogged[$roomNumber])) :

                            // avaliable in reservation table
                            if ($row->checkin <= $tomorrow && $row->checkin > $day) :

                                // do noting

                            else :
                                
                                if ($row->checkin > $day) :

                                    if ($row->checkout <= $tomorrow) :

                                        // var_dump($row->checkin - $day);
                                        $date1 = new \DateTime();
                                        $date1->setTimestamp($row->checkin);
        
                                        $date2 = new \DateTime();
                                        $date2->setTimestamp($day);
        
        
                                        if ($row->checkout != $day) :
        
                                            if ($row->checkin == $tomorrow) :
        
                                                if ($avaliability < 0) $avaliability = 0;
        
                                                $avaliability += 1;
        
                                                if ($avaliability > $rooms->rowCount()) : $avaliability = $rooms->rowCount(); endif;
        
                                            else:
        
                                                if ($row->checkin < $tomorrow) :
        
                                                    $avaliability--;

                                                    // remove now
                                                    if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;
        
                                                endif;
        
                                            endif;
        
                                        else:
        
                                        endif;

                                    else:

                                    endif;
    
                                else:

                                    // var_dump($roomNumber);
    
                                    if ($row->checkin == $day) :
    
                                        $avaliability--;

                                        // remove now
                                        if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;
    
                                    else:
    
                                        if ($row->checkin <= $day and $row->checkout >= $tomorrow) :
    
                                            $avaliability--;

                                            // remove now
                                            if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;
    
                                        else:
    
                                            if ($row->checkout > $day) :
    
                                                $avaliability--;

                                                // remove now
                                                if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;
    
                                            else:
    
                                                if ($row->checkout == $day && $avaliability == 0) :
                                                    
                                                    $avaliability++;

                                                    // add now
                                                    $avaliableRooms[$roomNumber] = true;
    
                                                endif;
    
                                                //if ( && $avaliability < $rooms->rowCount()) $avaliability++;
    
                                            endif;
    
                                        endif;
    
                                    endif;
    
                                endif;
                                
                            endif;

                            // add room number
                            $roomsLogged[$roomNumber] = true;

                        else:

                            // var_dump($roomNumber);

                        endif;

                    elseif ($row->checkedin == 1) :

                        if (isset($row->checkedout) && $row->checkedout == 0) :

                            // show room cat
                            $avaliability--;

                            // remove now
                            if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;

                        endif;

                    endif;

                endforeach;

                // check now
                if (!isset($roomsLogged[$roomNumber])) :

                    foreach ($resultArray as $row) :

                        if ($row->checkedin == 1 && !isset($row->checkedout)):

                            // find lodging
                            $lodging = db('lodging')->get('checkin,checkout,checkincount,checkedout')
                            ->where('booking = ?', $row->booking)->go();
                            
                            // not checkedout
                            if ($lodging->rowCount() > 0 && !isset($roomsLogged[$roomNumber])) :
                            
                                // load result
                                $lodging = $lodging->fetch(FETCH_OBJ);
                            
                                // not checked out
                                if (intval($lodging->checkedout) == 0) :
                            
                                    // load checkin
                                    $checkin = intval($lodging->checkin);
                                    $checkout = intval($lodging->checkout);
                            
                                    // avaliable in lodging table
                                    if ($checkout == $day) :
                            
                                        if ($day == strtotime(date('m/d/Y')) ) : 
                            
                                            // passed 12
                                            //if (intval(date('H')) < 12) : $avaliability--; endif;
                            
                                        else:
                            
                                            //$avaliability--;
                            
                                        endif;
                            
                                    else:
                            
                                        if ($checkout > $day || $checkin == $day) :
                            
                                            $avaliability--;

                                            // remove now
                                            if (isset($avaliableRooms[$roomNumber])) : unset($avaliableRooms[$roomNumber]); endif;
                            
                                        else:
                            
                                            //var_dump($roomNumber);
                            
                                        endif;
                            
                                    endif;
                            
                                    // log now
                                    $roomsLogged[$roomNumber] = true;
                            
                                endif;
                            
                            endif;
                            
                            endif;

                    endforeach;

                endif;

            endif;

        endforeach;

        // update avaliability
        if ($avaliability == 0 and count($avaliableRooms) > 0) $avaliability = count($avaliableRooms);

        // print data
        render([
            'avaliability'  => ($avaliability < 0 ? 0 : $avaliability),
            'rooms'         => $avaliableRooms
        ]);
    }

    /**
     * @method Avaliability createAvaliabilityRowIfNotExistsForThisYear
     * @param string $propertyId
     * @return void
     */
    private function createAvaliabilityRowIfNotExistsForThisYear(string $propertyId) : void
    {
        // @var string $year
        $year = intval(date('Y'));

        // check if record exists for year
        $query = db($this->tableName)->get('avaliabilityid')
        ->where('propertyid = ? and year = ?', $propertyId, $year)
        ->go();

        // check now
        if ($query->rowCount() == 0) :

            // create record now
            db($this->tableName)->insert([
                'propertyid'    => $propertyId,
                'year'          => $year,
                'calendar'      => json_encode([])
            ])->go();

        endif;
    }

    /**
     * @method Avaliability loadRoomAvaliability
     * @param string $propertyId
     * @return array
     */
    private function loadRoomAvaliability(string $propertyId) : array
    {
        // @var object $query 
        $query = null;

        // load calendar for start year and end year
        $query = db($this->tableName)->get('calendar')
        ->where('propertyid = ?', $propertyId)
        ->concat(' and (year >= :start and year <= :end)')
        ->bind([
            'start' => intval(date('Y', $this->startTimeStamp)), 
            'end'   => intval(date('Y', $this->endTimeStamp))
        ])->go();

        // @var array $calendarRecord
        $calendarRecord = [];

        // get the end of the end month
        $days = intval(date('t', $this->endTimeStamp));

        // get others
        list($endMonth, $endYear) = [date('m', $this->endTimeStamp), date('Y', $this->endTimeStamp)];

        // get start time stamp
        $startTimeStamp = intval($this->startTimeStamp);
        $endTimeStamp = strtotime(date('m/d/Y', strtotime($endMonth . '/' . $days . '/' . $endYear)));

        // update end time stamp
        $this->endTimeStamp = $endTimeStamp;

        // load query data
        if ($query->rowCount() > 0) while ($row = $query->fetch(FETCH_OBJ)) :

            // load calendar to an object
            $calendar = json_decode(stripslashes($row->calendar));

            // is it an array ??
            if (is_object($calendar)) :

                // loop through
                foreach ($calendar as $roomCategoryId => $categoryData) :

                    // load category data
                    foreach ($categoryData as $timeStamp => $data) :

                        // update timestamp
                        $timeStamp = intval($timeStamp);

                        // within timestamp??
                        if (($timeStamp >= $startTimeStamp && $timeStamp < $endTimeStamp) or ($timeStamp == $endTimeStamp)) :

                            // load inventory, booked, and avaliable rooms
                            //$this->loadInventoryBookedAndAvaliableRooms($data, $timeStamp, $roomCategoryId, $propertyId);

                            // push to calendar record
                            $calendarRecord[$roomCategoryId][intval($timeStamp)] = $data;

                        endif;

                    endforeach;

                endforeach;

            endif;

        endwhile;

        // return array
        return $calendarRecord;

    }

    /**
     * @method Avaliability loadInventoryBookedAndAvaliableRooms
     * @param object &$data
     * @param int $timeStamp
     * @param string $roomCategoryId
     * @param string $propertyId
     * @return void
     */
    private function loadInventoryBookedAndAvaliableRooms(object &$data, int $timeStamp, string $roomCategoryId, string $propertyId) : void
    {
        // load inventory
        if (!isset($data->Inventory)) :

            // get the total number of rooms for this category
            // $data->Inventory = 

        endif;
    }

    /**
     * @method Avaliability appendRecords
     * @param array $arrayOfMethods
     * @return object
     * 
     * This method would call an array of methods that exists in this class
     * Takes the response data and append to the global object
     */
    private function appendRecords(array $arrayOfMethods, ...$args) : object 
    {
        // create object
        $data = (object) [];

        // run through the array of methods
        foreach ($arrayOfMethods as $methodKey => $methodName) :

            // check if method exits
            if (method_exists($this, $methodName) && is_string($methodKey)) :

                // call class method
                $data->{$methodKey} = call_user_func_array([$this, $methodName], $args);

            endif;

        endforeach;

        // clear now
        $methodName = $methodKey = null;

        // return object
        return $data;
    }

    /**
     * @method Avaliability getPropertyRoomCategory
     * @param string $propertyId
     * @return array
     */
    private function getPropertyRoomCategory(string $propertyId) : array 
    {
        // @var array $category
        $category = [];

        // make table fetch
        $query = db('roomcategory')->get('`name`,roomcategoryid,price')
        ->where('propertyid = ? and status = ?', $propertyId, 1)->go();

        // get global discount
        $globalDiscount = 0; //self::getGlobalDiscountOrPropertyDiscount($propertyId);

        // are we good ?
        if ($query->rowCount() > 0) while ($row = $query->fetch(FETCH_OBJ)) :

            // get inventory
            $this->getTotalRoomInventory($row);

            // get total rooms booked 
            $this->getTotalBookedRooms($row, $propertyId);

            // update price with discount
            $this->updatePriceWithDiscount($row, $propertyId, $globalDiscount);

            // push data
            $category[] = $row;

        endwhile;

        // return array
        return $category;
    }

    /**
     * @method Avaliability updatePriceWithDiscount
     * @param object $row 
     * @param string $propertyId
     * @param int $globalDiscount
     * @return void
     */
    private function updatePriceWithDiscount(object &$row, string $propertyId, int &$globalDiscount) : void 
    {
        // get discount
        $discounts = db('discount')->get('name,value,booking,fromdate,todate,peiodic,paymentmode,paymentCollection,onlineorder')->where('propertyid = ? and status = ? and autoapply = ? and bypercentage = ?', $propertyId, 1, 1, 1)->like(['booking', '%'.$row->roomcategoryid.'%'])->go();

        // @var int $totalDiscount
        $totalDiscount = $globalDiscount;

        // make room for periodic discount
        $periodicDiscount = 0;

        // periodic range
        $periodicRange = (object) ['start' => 0, 'end' => 0];

        // do we have a discount set ?
        if ($discounts->rowCount() > 0) while($discount = $discounts->fetch(FETCH_OBJ)) :

            // @var array $rooms
            $rooms = json_decode(stripslashes($discount->booking));

            // check room id
            if (in_array($row->roomcategoryid, $rooms)) :

                // check peiodic
                if (intval($discount->peiodic) == 1) :

                    // compare
                    if (intval($discount->fromdate) >= $this->startTimeStamp && $this->endTimeStamp <= intval($discount->todate)) :

                        // add to discount
                        $periodicDiscount += intval($discount->value);

                        // add range
                        $periodicRange->start = intval($discount->fromdate);
                        $periodicRange->end = intval($discount->todate);

                    endif;

                else:

                    // check payment mode
                    if (intval($discount->paymentmode) == 1) :

                        // read json 
                        $paymentCollection = json_decode(stripslashes($discount->paymentCollection));

                        // check online
                        if ($paymentCollection->online) $totalDiscount += intval($discount->value);

                    endif;

                    // check if reservation is online
                    if (intval($discount->onlineorder) == 1) :

                        // add to discount
                        $totalDiscount += intval($discount->value);

                    endif;

                endif;

            endif;

        endwhile;

        // has periodic discount ??
        if ($periodicDiscount > 0) :

            // add global discount
            $periodicDiscount += $globalDiscount;

            // update row
            $row->newPrice = (doubleval($row->price) - ((doubleval($row->price) * doubleval($totalDiscount)) / 100));

            // add range
            $row->periodic = $periodicRange;

        else:

            // check total discount
            if ($totalDiscount > 0) :

                // update the price
                $row->price = (doubleval($row->price) - ((doubleval($row->price) * doubleval($totalDiscount)) / 100));

            endif;

        endif;

    }

    /**
     * @method Avaliability getTotalRoomInventory
     * @param object &$row
     * @return void
     */
    private function getTotalRoomInventory(object &$row) : void
    {
        $row->inventory = db('room')->get('id')->where('category = ? and status = ?', $row->roomcategoryid, 1)->go()->rowCount();
    }

    /**
     * @method Avaliability getTotalBookedRooms
     * @param object $row
     * @param string $propertyId
     * @return void
     */
    private function getTotalBookedRooms(object &$row, string $propertyId)
    {
        // update booked rooms
        $row->booked = [];
        
        // get a room number
        $rooms = db('room')->get('`number`,roomid')
        ->where('category = ? and status = ?', $row->roomcategoryid, 1)
        ->orderBy('id', 'desc')
        ->go();

        // do we have a room
        if ($rooms->rowCount() > 0) :

            // get today
            $today = intval($this->startTimeStamp);

            // get tomorrow
            $days = intval(date('t', intval($this->endTimeStamp)));
            $year = intval(date('Y', intval($this->endTimeStamp)));
            $month = intval(date('m', intval($this->endTimeStamp)));

            // build date
            $tomorrow = strtotime(date('m/d/Y', strtotime($month . '/' . $days . '/' . $year)));

            // @var array $result
            $result = [];

            // fetch result
            while($room = $rooms->fetch(FETCH_ASSOC)) :

                // get number
                $number = $room['number'];

                // get the room id
                $roomid = $room['roomid'];

                // check for room in reservation
                $reservations = db('reservation')->get('checkindate,checkoutdate,rooms,booking')
                ->where('cancelled = ? AND noshow = ? and property = ?', 0, 0, $propertyId)
                ->concat(" and ((checkindate >= :day and checkoutdate <= :tomorrow) and (rooms LIKE '%$row->roomcategoryid%'))")
                ->bind(['day' => $today, 'tomorrow' => $tomorrow])
                ->go();

                // check reservation
                if ($reservations->rowCount() > 0) while ($reservation = $reservations->fetch(FETCH_OBJ)) :

                    // read room category
                    $roomCategory = json_decode($reservation->rooms)[0];

                    // check room and number
                    if ($roomCategory->room == $row->roomcategoryid && $roomCategory->number == $number) :

                        // check if room has been checked out
                        //$checkedOut = false;

                        $result[$number][$reservation->booking] = (object) [
                            'checkin'   => intval($reservation->checkindate),
                            'checkout'  => intval($reservation->checkoutdate)
                        ];

                    endif;

                endwhile;
                
                
                // check lodging
                $lodging = db('lodging')->get('checkin,checkout,propertyid,booking,checkedout')->
                where('propertyid = ?', $propertyId)
                ->concat(" and (((checkin >= :day and checkout <= :tomorrow) or (checkin < :day and checkout <= :tomorrow and checkedout = :n)) and (rooms LIKE '%$roomid%'))")
                ->bind(['day' => $today, 'tomorrow' => $tomorrow, 'n' => 0])
                ->go();

                if ($lodging->rowCount() > 0) while($l = $lodging->fetch(FETCH_OBJ)) :

                    // @var int $cIn
                    $cIn = intval($l->checkin);
                    $cOut = intval($l->checkout);

                    $result[$number][$l->booking] = (object) [
                        'checkin'   => $cIn,
                        'checkout'  => $cOut,
                    ];

                    if (($cIn == $today and boolval($l->checkedout) == true) || ($cOut == $today)) :

                        // can we replace or add?
                        $result[$number][$l->booking]->checkedOut = boolval($l->checkedout);

                    endif;



                    //var_dump(date('d/m/Y', $cOut));

                endwhile;

            endwhile;

            // update booked
            $row->booked = $result;

        endif;
        
    }

    /**
     * @method Avaliability getGlobalDiscountOrPropertyDiscount
     * @param string $propertyId
     * @return int
     */
    private static function getGlobalDiscountOrPropertyDiscount(string $propertyId) : int
    {
        // get global property discount
        // $globalDiscount = db('`system`')->get('property_discount')
        // ->where('id = ?', 1)->go();

        // get property discount
        $propertyDiscount = db('property')->get('discount,commisson_discount')
        ->where('propertyid = ?', $propertyId)->go();

        // @var int $discount
        $discount = 0;

        // are we good ?
        if ($propertyDiscount->rowCount() > 0) :

            $propertyDiscount = $propertyDiscount->fetch(FETCH_OBJ);

            // fetch result
            $discount = intval($propertyDiscount->discount) + intval($propertyDiscount->commisson_discount);

        endif;

        // check global discount
        // if ($discount == 0 && $globalDiscount->rowCount() > 0) :

        //     // fetch result
        //     $discount = intval($globalDiscount->fetch(FETCH_OBJ)->property_discount);

        // endif;

        // return discount
        return $discount;
    }
}