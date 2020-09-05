<?php namespace App\Controllers;

use App\Models\CategoriasModels;

class PruebaController extends BaseController
{
	public function index()
	{
        $categoriasModel = new CategoriasModels();
        $categorias=$categoriasModel->findAll();
		$data['categorias'] = $categorias;
		return view('prueba',$data);
	}
	//--------------------------------------------------------------------
}