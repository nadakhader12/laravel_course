<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site4Controller extends Controller
{
    public function index()
    {
        return View('site4.index');
    }

    public function SERVICES()
    {
        return View('site4.SERVICES');
    }
    public function PORTFOLIO()
    {
        return View('site4.PORTFOLIO');
    }
    public function ABOUT()
    {
        return View('site4.ABOUT');
    }

    public function TEAM()
    {
        return View('site4.TEAM');
    }
    public function CONTACT()
    {
        return View('site4.CONTACT');
    }
}
