<?php

namespace Iag\Agws\Http\Controllers;

use Illuminate\Routing\Controller;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('agws::homepage.index');
    }

    public function services()
    {
        return view('agws::services.index')
            ->with('title', 'Services');
    }

    public function cv()
    {
        return view('agws::cv.index')
            ->with('title', 'Curriculum Vitae');
    }
}
