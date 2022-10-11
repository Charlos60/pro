<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\usuario;

class Usuarios extends BaseController
{
    protected $usuarioModel;
    protected $request;
    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->request = service('request');
        $this->uri = service('uri');

    }
    public function vista_menu()
     {
        return view("menu");
     }


    public function vista_editar()
     {
        return view("formularioEditar");
     }


    public function formulario_usuario()
     {
        return view("insertusuario");
     }



    public function mostrar_usuarios()
    {
        $result =$this->usuarioModel->getUsuario();
        $datos["usuario"] =$result;
        return view("usuarios",$datos);
    }

    public function insertar_usuario()
    {
        $usuario["nombre"] = $this->request->getPost("nombres");
        $usuario["correo"] = $this->request->getPost("correo");
        $usuario["contrasena"] = $this->request->getPost("contrasena");
        $result =$this->usuarioModel->insertUsuario($usuario);

        $result2 =$this->usuarioModel->getUsuario();
        $datos["usuario"] =$result2;

        return view("usuarios",$datos);
    }


    public function borrar_usuario(){
        $id = $this->uri->getSegment(2);//id del empleado en la ruta
        $result = $this->usuarioModel->deleteUsuario($id);
        $result2 =$this->usuarioModel->getUsuario();
        $datos["usuario"] =$result2;
        return view("usuarios",$datos);
    }
    public function editar_usuario(){
        $id= $this->uri->getSegment(2); 
        $usuario["nombre"] = $this->request->getPost("nombres");
        $usuario["correo"] = $this->request->getPost("correo");
        $usuario["contrasena"] = $this->request->getPost("contrasena");
        $result =$this->usuarioModel->updateUsuario($usuario,$id);


        
        $result2 =$this->usuarioModel->getUsuario();
        $datos["usuario"] =$result2;

        return view("usuarios",$datos);
    }

}