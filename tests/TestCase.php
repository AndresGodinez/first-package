<?php

namespace AGodinez\FirstPackage\Tests;

use AGodinez\FirstPackage\FirstPackageServiceProvider;
use \AGodinez\FirstPackage\Facades\FirstPackage;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class
        ];
    }

    public function getPackageAliases($app)
    {
        return [
            "FirstPackage" => FirstPackage::class
        ];
    }
}