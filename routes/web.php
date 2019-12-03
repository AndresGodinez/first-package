<?php

use AGodinez\FirstPackage\Facades\FirstPackage;
use Illuminate\Support\Facades\Route;

Route::get('hello-route', function () {
    return FirstPackage::Hello();
});
