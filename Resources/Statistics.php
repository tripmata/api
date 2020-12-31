<?php
namespace Resources;

use Lightroom\Packager\Moorexa\RouterMethods;
use function Lightroom\Templates\Functions\{render};
use Lightroom\Packager\Moorexa\Interfaces\ResourceInterface;
/**
 * @package Route Resources
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Statistics implements ResourceInterface
{
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
        $method->get('statistics/property/{propertyId}', 'getPropertyStats');
    }

    /**
     * @method Statistics getPropertyStats
     * @param string $propertyId
     * @return void 
     */
    public function getPropertyStats(string $propertyId) : void
    {
        // load trait
        $propertyClass = new class(){
            use Statistics\Property;
        };

        // set the property
        $propertyClass->property = $propertyId;

        // fetch data
        $propertyClass->totalReservationsForThisMonth();
        $propertyClass->totalReservationsForToday();
        $propertyClass->noShow();
        $propertyClass->inHouseGuests();
        $propertyClass->propertyViews();
        $propertyClass->dueToCheckout();
        $propertyClass->checkOutOverdue();
        $propertyClass->totalReviewScore();
        $propertyClass->reviewsThisMonth();
        $propertyClass->todayAvailability();


        // render json or xml
        render($propertyClass);
    }
}