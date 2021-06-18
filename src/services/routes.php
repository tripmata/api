<?php

use Lightroom\Router\Middlewares;
use Lightroom\Packager\Moorexa\Router as Route;
use function Lightroom\Templates\Functions\{render};

/*
 ***************************
 * 
 * @ Route
 * info: Add your GET, POST, DELETE, PUT request handlers here. 
*/

// handle access
Route::any('*', function(array $request){

    // apply middleware
    $ready = func()->trueOnly([ Middlewares::apply(Moorexa\Middlewares\Access::class, $request) ]);

    // call render
    if (!$ready) return render([
        'status'    => 'error',
        'message'   => 'Unauthorized visitor. You need a pass to complete request.'
    ]);

    // load next route
    Route::reset();
});

// handle resource
Route::resource(Resources\Statistics::class);
Route::resource(Resources\Property::class);
Route::resource(Resources\Avaliability::class);