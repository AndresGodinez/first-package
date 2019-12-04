<?php

namespace AGodinez\FirstPackage\Tests;

use AGodinez\FirstPackage\FirstPackageServiceProvider;
use \AGodinez\FirstPackage\Facades\FirstPackage;
use AGodinez\FirstPackage\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    public function getPackageAliases($app)
    {
        return [
            "FirstPackage" => FirstPackage::class
        ];
    }
}