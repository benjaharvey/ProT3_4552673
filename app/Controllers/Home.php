<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/principal');
    }

    public function miembros(): string
    {
        return view('front/miembros-aeroclub');
    }

      public function miembros(): string
    {
        return view('front/miembros-aeroclub');
    }
}
