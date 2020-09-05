<?php
namespace App\Models;
use       CodeIgniter\Model;

class LoginModels extends Model 
{
    protected $table           = 'usuarios';
    protected $primarykey      = 'id';
    protected $returnType      = 'array';
    protected $allowedFields   = ['correo', 'nombre', 'contraseña'];

    public function validacion($correo, $contraseña)
    {
        $query = $this->getWhere([
            'correo' => $correo,
        ]);

        $result = $query->getRowArray();

        if ($return=$contraseña === $result['contraseña']) 
        {
           
            return $return=[
                'true'   => true,
                'nombre' => $result['nombre']
            ];
        }
        else 
        {
            return false;
        }
    }
}