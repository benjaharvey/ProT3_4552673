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

    public function servicios(): string
    {
        return view('front/servicios');
    }

    public function registro(): string
    {
        return view('front/registrar');
    }

    public function inicioSesion(): string
    {
        return view('front/iniciar-sesion');
    }
}
