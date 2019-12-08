<?php

namespace Iag\Agws\Http\Controllers;

use Illuminate\Routing\Controller;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('agws::wrapper', ['page' => 'agws::homepage.page']);
    }

    public function services()
    {
        return view('agws::wrapper', ['page' => 'agws::services.page']);
    }
}