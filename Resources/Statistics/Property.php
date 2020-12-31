<?php
namespace Resources\Statistics;

use function Lightroom\Database\Functions\{db,map};
/**
 * @package Property Trait
 * @author Amadi Ifeanyi
 */
trait Property
{
    /**
     * @var string $status 
     */
    public $status = 'success';

    /**
     * @var string $property
     */
    public $property = '';

    /**
     * @method Property totalReservationsForThisMonth
     * @return void
     */
    public function totalReservationsForThisMonth() : void
    {
        // get begining of the month
        $firstDayOfThisMonth = mktime(0,0,0,date('n'),1,date('Y'));

        // get the last day of the month
        $lastDayOfThisMonth = mktime(0,0,0,date('n'),date('t'),date('Y'));

        // make query
        $reservations = db('reservation')->get('property = ? and created >= ? and created <= ?');
        $reservations->bind($this->property, $firstDayOfThisMonth, $lastDayOfThisMonth);

        // update
        $this->reservationsThisMonth = $reservations->go()->rowCount();
    }

    /**
     * @method Property totalReservationsForToday
     * @return void
     */
    public function totalReservationsForToday() : void
    {
        // get today
        $dateTime = new \DateTime(date('m/d/Y'));

        // make query
        $reservations = db('reservation')->get('property = ? and created = ? or checkindate = ?');
        $reservations->bind($this->property, $dateTime->getTimestamp(), $dateTime->getTimestamp());

        // update
        $this->reservationsToday = $reservations->go()->rowCount();
    }

    /**
     * @method Property noShow
     * @return void
     */
    public function noShow() : void
    {
        // make query
        $reservations = db('reservation')->get('property = ? and noshow = ? or noshow = ?', $this->property, 1, 2);

        // update
        $this->noShow = $reservations->go()->rowCount();
    }

    /**
     * @method Property inHouseGuests
     * @return void
     */
    public function inHouseGuests() : void
    {
        // make query
        $lodging = db('lodging')->get('propertyid = ? and checkedout = ?');
        $lodging->bind($this->property, 0);

        // update
        $this->inHouseGuests = $lodging->go()->rowCount();
    }

    /**
     * @method Property propertyViews
     * @return void
     */
    public function propertyViews() : void
    {
        // make query
        $property = map(db('property')->get('propertyid = ?', $this->property));

        // update
        $this->propertyViews = intval($property->vies);
    }

    /**
     * @method Property dueToCheckout
     * @return void
     */
    public function dueToCheckout() : void
    {
        // get today
        $today = strtotime(date("m/d/Y", time()));

        // make query
        $lodging = db('lodging')->get('propertyid = ? and checkout = ?', $this->property, $today);

        // update
        $this->dueToCheckout = $lodging->go()->rowCount();
    }

    /**
     * @method Property checkOutOverdue
     * @return void
     */
    public function checkOutOverdue() : void
    {
        // make query
        $lodging = map(db('lodging')->get('propertyid = ? and checkout < ?', $this->property, time()));

        // @var int $overdue
        $overdue = 0;

        // run fetch
        $lodging->obj(function($row) use (&$overdue){

            // @var bool $continue 
            $continue = true;

            // build time
            $time = mktime(12,0,1,date('n', $row->checkout),date('j', $row->checkout),date('Y', $row->checkout));

            // check time
            if (time() > $time) $overdue++;
        });

        // update
        $this->checkOutOverdue = $overdue;
    }

    /**
     * @method Property totalReviewScore
     * @return void
     */
    public function totalReviewScore() : void
    {
        // @var int $reviewScore 
        $reviewScore = 0;

        // make query
        $reviews = db('reviews')->get('property = ?', $this->property)->go();

        // sum all
        while ($row = $reviews->fetch(FETCH_OBJ)) $reviewScore += intval($row->star);

        // update
        $this->totalReviewScore = ($reviewScore / $reviews->rowCount());
        $this->totalReviewCount = $reviews->rowCount();
    }

    /**
     * @method Property reviewsThisMonth
     * @return void
     */
    public function reviewsThisMonth() : void
    {
        // @var int $reviewCount
        $reviewCount = 0;

        // make query
        $reviews = db('reviews')->get('property = ? and created != ?', $this->property, 0)->go();

        // get this month and year
        $thisMonth = intval(date('M'));
        $thisYear = intval(date('Y'));

        // update count
        while ($row = $reviews->fetch(FETCH_OBJ)) :

            // get review month and year
            $reviewMonth = intval(date('M', $row->created));
            $reviewYear = intval(date('Y', $row->created));

            // compare and add
            if ($reviewMonth == $thisMonth && $reviewYear == $thisYear) $reviewCount++;

        endwhile;

        // update
        $this->reviewsThisMonth = $reviewCount;
    }

    /**
     * @method Property todayAvailability
     * @return void
     */
    public function todayAvailability() : void
    {
        // @var int $total
        $total = 0;

        // make query
        $rooms = map(db('room')->get('propertyid = ? and status = ?', $this->property, 1));

        // check lodging table
        $rooms->obj(function($room) use (&$total){

            // check lodging
            $lodging = map(db('lodging')->get('propertyid = ? AND checkedout = ?', $room->propertyid, 0));

            // increment
            $total++;

            // check room.. 
            $lodging->obj(function($row) use (&$room, &$total){

                // read rooms
                $rooms = json_decode($row->rooms);

                // run loop
                foreach ($rooms as $roomLodged) :

                    // check room id
                    if (($roomLodged->Id == $room->roomid) && ($roomLodged->Checkedout == 0 && $total > 0)) $total--;

                endforeach;
            });
        });

        // update
        $this->todayAvailability = $total;
    }
}