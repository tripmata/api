<?php
namespace Resources;

use stdClass;
use Lightroom\Packager\Moorexa\RouterMethods;
use function Lightroom\Templates\Functions\{render};
use function Lightroom\Requests\Functions\{post};
use function Lightroom\Database\Functions\{map, db};
use Lightroom\Packager\Moorexa\Interfaces\ResourceInterface;
/**
 * @package Route Property
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Property implements ResourceInterface
{
    /**
     * @var string $propertyId
     */
    private $propertyId;

    /**
     * @var mixed $property
     */
    private $property;

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
        $method->post('property/update/{propertyId}', 'updateProperty');
    }

    /**
     * @method Property updateProperty
     * @param string $propertyId
     * @return mixed 
     */
    public function updateProperty(string $propertyId) 
    {
        // load response
        $response = new stdClass();
        $response->status = 'error';
        $response->message = '';

        // get property record
        $property = map(db('property')->get('propertyid = ?', $propertyId)->allowSlashes());

        // do we have such a property?
        if ($property->rows == 0) :

            // property does not exists
            $response->message = 'Property does not exists';

            // stop process
            return render($response);

        endif;

        // set the propertyId
        $this->propertyId = $propertyId;

        // make property accessible within this class
        $this->property = $property;

        // toggle jobs
        switch(post()->get('job')) :

            // remove image from gallery
            case 'remove from gallery':

                // load method
                $this->removeImageFromGallery($response);
                
            break;

            // change image in gallery
            case 'change gallery image':

                // load method
                $this->replaceGalleryImage($response);
                
            break;

            // no job to process
            default:
                $response->message = 'No job to process. Please check out the documentation.';

        endswitch;

        // render json or xml
        render($response);
    }

    /**
     * @method Property removeImageFromGallery
     * @param stdClass $response
     * @return void
     */
    private function removeImageFromGallery(stdClass &$response) : void 
    {
        // image not sent
        $response->message = 'Missing image in request body';

        // check if image does exists in request body
        if (post()->has('image')) :

            // get index 
            $index = intval(post()->get('index')) - 1;

            // get property gallery
            $gallery = json_decode($this->property->gallery);

            // can we remove
            if (isset($gallery[$index])) unset($gallery[$index]);

            // save now
            $this->property->update(['gallery' => json_encode($gallery)]);

            // all good
            $response->status = 'success';
            $response->message = 'Image removed successfully.';

        endif;
    }


    /**
     * @method Property replaceGalleryImage
     * @param stdClass $response
     * @return void
     */
    private function replaceGalleryImage(stdClass &$response) : void 
    {
        // image not sent
        $response->message = 'Missing image in request body';

        // check if image does exists in request body
        if (post()->has('image')) :

            // get index 
            $index = intval(post()->get('index')) - 1;

            // get the image
            $image = post()->get('image');

            // check image
            if (strlen($image) > 5) :

                // can we update gallery
                if ($index >= 0) :

                    // get property gallery
                    $gallery = json_decode($this->property->gallery);

                    // can we replace
                    $gallery[$index] = $image;


                    // save now
                    $this->property->update(['gallery' => json_encode($gallery)]);

                else:

                    // update banner
                    $this->property->update(['banner' => $image]);

                endif;

                // all good
                $response->status = 'success';
                $response->message = 'Image updated successfully.';

            endif;

        endif;
    }
}