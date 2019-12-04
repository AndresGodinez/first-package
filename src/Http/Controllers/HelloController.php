<?php


namespace AGodinez\FirstPackage\Http\Controllers;


use AGodinez\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index()
    {
        return FirstPackage::Hello();
    }

}