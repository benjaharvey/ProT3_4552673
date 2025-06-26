<?php
namespace App\Controllers;

use App\Models\usuario_Model;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        return view('front/iniciar-sesion');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getVar('email_usuario');
        $password = $this->request->getVar('pass_usuario');

        $data = $model->where('email_usuario', $email)->first();

        if ($data) {
            $pass = $data['pass_usuario'];
            $ba = $data['baja'];

            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id_usuario'       => $data['id_usuario'],
                    'nombre_usuario'   => $data['nombre_usuario'],
                    'apellido_usuario' => $data['apellido_usuario'],
                    'email_usuario'    => $data['email_usuario'],
                    'usuario'          => $data['usuario'],
                    'perfil_id'        => $data['perfil_id'],
                    'logged_in'        => true
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
