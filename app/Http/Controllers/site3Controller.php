<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site3Controller extends Controller
{
    public function index()
{
    return View('site3.master2');
}

public function EXPERIENCE()
{
    return View('site3.EXPERIENCE');
}
public function EDUCATION()
{
    return View('site3.EDUCATION');
}
public function SKILLS()
{
    return View('site3.SKILLS');
}

public function INTERESTS()
{
    return View('site3.INTERESTS');
}
public function AWARDS()
{
    return View('site3.AWARDS');
}

}
