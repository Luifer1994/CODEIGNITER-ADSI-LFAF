<?php namespace App\Controllers;

use App\Models\UsuariosModels;
use Config\Encryption;

class UsuariosController extends BaseController
{
	public function index()
	{
        $usuariosModel = new UsuariosModels();
        $usuarios=$usuariosModel->findAll();
        $data['usuarios'] = $usuarios ;
        return view('usuarios', $data);
    }
    

    public function create()
    {   
        $usuariosModel = new UsuariosModels();
        $contraseña =  myEncryptor('encrypt', $this->request->getPost('contraseña'));

        $data=[
            'nombre'     =>$this->request->getPost('nombre'),
            'correo'     =>$this->request->getPost('correo'),
            'telefono'   => $this->request->getPost('telefono'),
            'contraseña' => $contraseña,
        ];

        if($usuariosModel->save($data)===false)
        {
            $usuarios=$usuariosModel->findAll();
            $data['usuarios'] = $usuarios ;
            $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Error al registar campos Vacios';
            return view('usuarios', $data);
        }
        else {
            $usuarios=$usuariosModel->findAll();
            $data['usuarios'] = $usuarios ;
            $data['mensaje'] = '<i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i> Usuario  registrado con exito';
            return view('usuarios', $data);
        }
        
       
    }


    public function update()
    {
        $usuariosModel = new UsuariosModels();
        $contraseña =  myEncryptor('encrypt', $this->request->getPost('contraseña'));
        $id = $this->request->getPost('id');
        $data=[
            'nombre'     =>$this->request->getPost('nombre'),
            'correo'     =>$this->request->getPost('correo'),
            'telefono'   => $this->request->getPost('telefono'),
            'contraseña' => $contraseña,
        ];
        $usuariosModel->update($id, $data);

            $usuarios=$usuariosModel->findAll();
            $data['usuarios'] = $usuarios ;
            $data['mensaje'] = '<i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i> Usuario  Actualizado con exito';
            return view('usuarios', $data);
    }


    public function delete()
    {
        $usuariosModel = new UsuariosModels($db);
        $request= \Config\Services::request();
		$id= myEncryptor('decrypt', $request->getPostGet('id'));
		$usuariosModel->delete($id);
        $usuarios=$usuariosModel->findAll();
        $data['usuarios'] = $usuarios ;
        $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Usuario Eliminado con exito.';
        return view('usuarios', $data);
    }

	//--------------------------------------------------------------------

}