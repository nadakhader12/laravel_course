<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site2Controller extends Controller
{
public function index()
{
    return View('site2.index');
}

public function about()
{
    return View('site2.about');
}
public function post()
{
    return View('site2.post');
}
public function contact()
{
    return View('site2.contact');
}






}
