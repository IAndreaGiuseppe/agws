<?php

namespace Iag\Agws\Tests\Unit\Http\Controllers;

use Iag\Agws\Tests\IntegrationTestCase;

class WebsiteControllerTest extends IntegrationTestCase
{
    public function test_HomepageRoute()
    {
        $response = $this->get(route('website.homepage'));

        $response->assertOk();
        $response->assertViewIs('agws::homepage.index');
    }

    public function test_ServicesRoute()
    {
        $response = $this->get(route('website.services'));

        $response->assertOk();
        $response->assertViewIs('agws::services.index');
        $response->assertViewHas('title');
    }

    public function test_CvRoute()
    {
        $response = $this->get(route('website.cv'));

        $response->assertOk();
        $response->assertViewIs('agws::cv.index');
    }
}
