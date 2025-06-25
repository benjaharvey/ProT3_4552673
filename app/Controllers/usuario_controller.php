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
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'usuario'   => 'required|ming_length[3]',
            'email'     => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email',
            'pass'      => 'required|ming_length[3]|max_length[10]'
        ],
        
    );
     $formModel = new usuario_Model();

    }
 }