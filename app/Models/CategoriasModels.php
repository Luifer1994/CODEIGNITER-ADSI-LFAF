<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriasModels extends Model
{
 protected $table           = 'categorias';
 protected $primarykey      = 'id';


 protected $validationRules = ['nombre'      => 'required',
                               'descripcion' => 'required'];

protected $validationMessages = [
    'nombre' =>['required'=>'Nombre vacio']
];

protected $allowedFields   = ['nombre', 'descripcion'];

protected $skipValidation = false;

}