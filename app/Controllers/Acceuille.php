<?php

namespace App\Controllers;

class Acceuille extends BaseController
{
    public function index(): string
    {
        return view('acceuille');
    }
}
