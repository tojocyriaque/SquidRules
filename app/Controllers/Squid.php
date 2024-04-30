<?php

namespace App\Controllers;

class Squid extends BaseController
{
    public function index(): string
    {
        return view('squid');
    }
}
