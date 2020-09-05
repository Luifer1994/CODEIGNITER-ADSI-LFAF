<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModels extends Model
{
 protected $table           = 'usuarios';
 protected $primarykey      = 'id';

 
 
 protected $validationRules = ['nombre'     => 'required',
                               'correo'     => 'required|valid_email',
                               'contraseña' => 'required'];

protected $validationMessages = [
    'nombre' =>['required'=>'Nombre vacio']
];

protected $allowedFields   = ['nombre', 'correo', 'telefono', 'contraseña'];

protected $skipValidation = false;

}