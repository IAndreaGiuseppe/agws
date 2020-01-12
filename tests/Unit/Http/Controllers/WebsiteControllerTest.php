<?php

namespace Iag\Agws\Tests\Unit\Http\Controllers;

use Iag\Agws\Tests\IntegrationTestCase;

class WebsiteControllerTest extends IntegrationTestCase
{
    public function test_HomepageRoute()
    {
        $response = $this->get(route('website.homepage'));

        $response->assertOk();
        $response->assertViewIs('agws::homepage.page');
    }

    public function test_ServicesRoute()
    {
        $response = $this->get(route('website.services'));

        $response->assertOk();
        $response->assertViewIs('agws::services.page');
        $response->assertViewHas('title');
    }
}
