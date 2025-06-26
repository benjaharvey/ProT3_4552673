<?php
namespace App\Controllers;

class Panel_controller extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'nombre_usuario' => $session->get('nombre_usuario'),
            'email_usuario' => $session->get('email_usuario')
        ];

        return view('front/panel', $data);
    }
}
