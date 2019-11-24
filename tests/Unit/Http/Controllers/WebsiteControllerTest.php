<?php

namespace Iag\Agws\Tests\Unit\Http\Controllers;

use Iag\Agws\Tests\IntegrationTestCase;

class WebsiteControllerTest extends IntegrationTestCase
{
    public function test_HomepageRoute()
    {
        $response = $this->get(route('website.homepage'));

        $response->assertOk();
    }
}
