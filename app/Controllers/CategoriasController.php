<?php namespace App\Controllers;

use App\Models\CategoriasModels;

class CategoriasController extends BaseController
{       
	public function index()
	{
        $categoriasModel = new CategoriasModels();
        $categorias=$categoriasModel->findAll();
        $data['categorias'] = $categorias;

        return view('categorias', $data);
    }
    
    public function create()
    {   
        $categoriasModel = new CategoriasModels();

        $data=[
            'nombre'     =>$this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion'),
        ];

        if($categoriasModel->save($data)===false)
        {
            $categorias=$categoriasModel->findAll();
            $data['categorias'] = $categorias;
            $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Error al registar campos Vacios';

            return view('categorias', $data);
        }
        else 
        {
            $categorias=$categoriasModel->findAll();
            $data['categorias'] = $categorias;
            $data['mensaje'] = '<i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i> Categoria  registrado con exito';

            return view('categorias', $data);
        }
    
    }

    public function update()
    {
        $categoriasModel = new CategoriasModels();
        $id = $this->request->getPost('id');
        $data=[
            'nombre'     =>$this->request->getPost('nombre'),
            'precio'     =>$this->request->getPost('precio'),
            'descripcion'=> $this->request->getPost('descripcion'),
        ];

        $categoriasModel->update($id, $data);
        $categorias=$categoriasModel->findAll();
        $data['categorias'] = $categorias;
        $data['mensaje'] = '<i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i> Categoria  actualizada con exito';

        return view('categorias', $data);
    }

    public function delete()
    {
        $categoriasModel = new CategoriasModels($db);
		$request= \Config\Services::request();
		$id= myEncryptor('decrypt', $request->getPostGet('id') );
        $categoriasModel->delete($id);
        $categorias=$categoriasModel->findAll();
		$data['categorias'] = $categorias;
        $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Categoria Eliminado con exito.';

        return view('categorias', $data);
    }

	//--------------------------------------------------------------------

}
