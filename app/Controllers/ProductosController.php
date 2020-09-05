<?php namespace App\Controllers;

use App\Models\ProductosModels;
use App\Models\CategoriasModels;

class ProductosController extends BaseController
{       
	public function index()
	{
        $productoModel = new ProductosModels();
        $categoriasModel = new CategoriasModels();

        $categorias=$categoriasModel->findAll();
        $productos=$productoModel->findAll();
        
        $data['productos'] = $productos;
        $data['categorias'] = $categorias;

        return view('productos', $data);
    }
    
    public function create()
    {   
        $productoModel = new ProductosModels();
        $categoriasModel = new CategoriasModels();
        $data=[
            'nombre'     =>$this->request->getPost('nombre'),
            'categorias_id'     =>$this->request->getPost('categoria'),
            'precio'     =>$this->request->getPost('precio'),
            'descripcion'=> $this->request->getPost('descripcion'),
        ];

        if($productoModel->save($data)===false)
        {
            $categorias=$categoriasModel->findAll();
            $productos=$productoModel->findAll();
            
            $data['productos'] = $productos;
            $data['categorias'] = $categorias;
            $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Error al registar campos Vacios';

            return view('productos', $data);
        }
        else 
        {
            $categorias=$categoriasModel->findAll();
            $productos=$productoModel->findAll();
            
            $data['productos'] = $productos;
            $data['categorias'] = $categorias;
            $data['mensaje'] = '<i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i> Producto  registrado con exito';

            return view('productos', $data);
        };
       

        
    }

    public function update()
    {
        $productoModel = new ProductosModels();
        $categoriasModel = new CategoriasModels();
        
        $id = $this->request->getPost('id');
        $nombre = $this->request->getPost('nombre');
        
        $data=[
            'nombre'        =>$this->request->getPost('nombre'),
            'categorias_id' =>$this->request->getPost('categorias'),
            'precio'        =>$this->request->getPost('precio'),
            'descripcion'   => $this->request->getPost('descripcion'),
        ];
        $productoModel->update($id, $data);
        $categorias=$categoriasModel->findAll();
        $productos=$productoModel->findAll();
        
        $data['productos'] = $productos;
        $data['categorias'] = $categorias;
        $data['mensaje'] = ' <i  style="color: green; font-size: 40px" class="fas fa-check-circle"></i>  '.$nombre.' actualizado con exito';

        return view('productos', $data);
    }

    public function delete()
    {
        $productoModel=new ProductosModels($db);
        $categoriasModel = new CategoriasModels();

		$request= \Config\Services::request();
		$id= myEncryptor('decrypt', $request->getPostGet('id') );
		$productoModel->delete($id);
        $categorias=$categoriasModel->findAll();
        $productos=$productoModel->findAll();
        
        $data['productos'] = $productos;
        $data['categorias'] = $categorias;
        $data['mensaje'] = '<i style="color: red; font-size: 40px" class="fas fa-exclamation-circle"></i>  Producto Eliminado con exito.';

        return view('productos', $data);
    }

	//--------------------------------------------------------------------

}
