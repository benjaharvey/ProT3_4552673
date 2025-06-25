<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre_usuario', 'apellido_usuario', 'usuario', 'email_usuario', 'pass_usuario'. 'perfil_id', 'baja'];
}
