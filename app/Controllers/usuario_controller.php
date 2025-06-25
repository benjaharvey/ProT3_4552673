<?php
 namespace App\Controllers;
 use App\Models\usuario_Model;
 use CodeIgniter\Controller;

 class usuario_controller extends Controller{

    public function __construct()
    {
        helper (['form', 'url']);

    }

    public function create()
    {   
        return view('front/registrar');

    }

    public function formValidation() 
    {
        $input = $this->validate([
            'nombre_usuario'    => 'required|min_length[3]',
            'apellido_usuario'  => 'required|min_length[3]|max_length[25]',
            'usuario'           => 'required|min_length[3]',
            'email_usuario'     => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email_usuario]',
            'pass_usuario'      => 'required|min_length[3]|max_length[10]'
        ]);
     $formModel = new usuario_Model();

    if (!$input) {
        // 👇 AGREGÁS ESTE ECHO
        echo "Falló validación";
        return view('front/registrar', ['validation' => $this->validator]);

    } else {
        // 👇 AGREGÁS ESTE ECHO
        echo "Validación correcta";
        
        $formModel ->save([
            'nombre_usuario' => $this->request->getVar('nombre_usuario'),
            'apellido_usuario' => $this->request->getVar('apellido_usuario'),
            'usuario' => $this->request->getVar('usuario'),
            'email_usuario' => $this->request->getVar('email_usuario'),
            'pass_usuario' => password_hash($this->request->getVar('pass_usuario'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('success', 'Usuario registrado con exito');
        return $this->response->redirect('login');
     }
    }
 }