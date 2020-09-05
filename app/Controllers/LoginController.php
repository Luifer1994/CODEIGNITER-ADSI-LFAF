<?php namespace App\Controllers;

use App\Models\LoginModels;
use CodeIgniter\Controller;
use App\Models\UsuariosModels;

class LoginController extends BaseController
{
    
	public function index()
	{
        if (! is_null($this->session->get('logged_in'))) {
         
            return redirect()->to('home');
        }

        $validaion = new LoginModels();
        
        
        if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
            
            $correo = $this->request->getPost('correo');
            $contraseña = $this->request->getPost('contraseña');

            $usuario =  $validaion->validacion($correo , myEncryptor('encrypt', $contraseña));
            
            if ($usuario == true) 
            {
                $usuariosModel = new UsuariosModels();
                $session = \Config\Services::session();
                $session->start();
                
                $nombre=$usuario['nombre'];
                
                $userdata=[
                    'correo'     => $correo,
                    'logged_in'  => true,
                    'nombre'     => $nombre
                ];
      
                $session->set($userdata);
         
                return redirect()->to('home');
            }
            elseif ($usuario == false) {
                $data['mensaje'] = ' <i  style="color: black; font-size: 40px" class="fas fa-exclamation-circle"></i>  Correo o Contraseña no valida';
                return view('login', $data);
            } 
        }

        return view('login');
	}
  
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }

   
}