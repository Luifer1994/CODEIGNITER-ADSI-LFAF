<?php namespace App\Models;

use CodeIgniter\Model;

class ProductosModels extends Model
{
 protected $table           = 'productos';
 protected $primarykey      = 'id';

 
 
 protected $validationRules = ['nombre'       => 'required',
                               'categorias_id' => 'required',
                               'precio'       => 'required'];

protected $validationMessages = [
    'nombre' =>['required'=>'Nombre vacio']
];

protected $allowedFields   = ['nombre', 'categorias_id', 'precio', 'descripcion'];

protected $skipValidation = false;

}