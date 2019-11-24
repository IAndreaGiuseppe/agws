<?php

namespace Iag\Agws\Tests\Unit\Http\Controllers;

use Iag\Agws\Tests\IntegrationTestCase;

class WebsiteControllerTest extends IntegrationTestCase
{
    public function test_HomepageRoute()
    {
        $response = $this->get(route('website.homepage'));

        $response->assertOk();
        $response->assertViewIs('agws::wrapper');
        $response->assertViewHas('page', 'agws::homepage.page');
    }
}
