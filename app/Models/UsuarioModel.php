<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    public function getUsuario(){
        $builder = $this->db->table("usuarios");
        $builder->select('*');
        $result=$builder->get();
        return $result->getResultArray();
    }
    public function insertUsuario($usuario){
        $builder = $this->db->table("usuarios");
        $result= $builder->insert($usuario);
        return $result;
    }

    public function deleteUsuario($id){
        $result = $this->db->query("Delete from usuarios where idusuario= $id");
        return $result;
    }
    public function updateUsuario($usuario,$id){
        $id2=$id;
        echo $id2;
        $nombre=$usuario['nombre'];
        $correo=$usuario['correo'];
        $contrasena=$usuario['contrasena'];
        $result = $this->db->query("update usuarios set nombre='$nombre',correo='$correo',contrasena='$contrasena' where idusuario= $id2");
        return $result;
        
        
        
        /*$data = [
            'nombre' => $nombre,
            'correo'  => $correo,
            'contrasena'  => $contrasena,
        ];
        
        $builder =$this->db->where('idusuario', $id);
        $result= $builder->update($data);
        return $result;*/
    }
    
}