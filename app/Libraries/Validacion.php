<?php

namespace App\Libraries;

class Validacion{
    public function validacionUsuario($usuario,$dato){
        //echo $datos["correo"];
        foreach($usuario as $usuariol):
            
             $usuariol["correo"];
             $usuariol["contrasena"];
             if(($dato["correo"]==$usuariol["correo"])&&($dato["contrasena"]==$usuariol["contrasena"])){
                $valor=1;
                return $valor;
             }
             
        endforeach;

        $valor =0;
        return $valor;

  

    }
}

