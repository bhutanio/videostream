<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        meta()->setMeta(env('SITE_NAME'));
        return view('home');
    }
}
