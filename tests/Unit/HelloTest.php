<?php

namespace AGodinez\FirstPackage\Tests\Unit;

use FirstPackage;
use AGodinez\FirstPackage\Tests\TestCase;

class HelloTest extends TestCase
{

    /** @test */
    function it_returns_the_message()
    {
        $this->assertEquals(
            "hello from my first package Andres",
            FirstPackage::hello()
        );

        $this->assertEquals(
            "hello from my first package Jesus",
            FirstPackage::hello('Jesus')
        );
    }
}