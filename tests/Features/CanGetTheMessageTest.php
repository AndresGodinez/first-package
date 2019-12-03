<?php

namespace AGodinez\FirstPackage\Tests\Features;

use AGodinez\FirstPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    /** @test */
    public function it_visit_the_route_can_get_the_message()
    {
        $this->get('hello-route')->assertSuccessful();
    }
}