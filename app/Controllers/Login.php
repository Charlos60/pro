<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Libraries\Validacion;
class Login extends BaseController
{
    protected $loginModel;
    protected $request;
    protected $validacion;
    public function __construct(){
        $this->loginModel = new LoginModel(); 
        $this->uri = service('uri');
        $this->request = service('request');
        $this->validacion = new Validacion();
    }
    public function vistalogin()
     {
        return view("login");
     }

     public function login(){
        $result =$this->loginModel->getUsuario();
        $datos["usuario"] =$result;
        $usuario ["correo"] = $this->request->getPost("correo");
        $usuario ["contrasena"] = $this->request->getPost("contrasena");
        $resultado=$this->validacion->validacionUsuario($result,$usuario);
        if($resultado==1){
            return redirect()->to(base_url('/public/menu'))->with('mensaje','1');

        }else{
            return redirect()->to(base_url('/public/login'))->with('mensaje','1');

        }
    }
}