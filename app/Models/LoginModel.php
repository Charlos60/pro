<?php namespace App\Models;
    use CodeIgniter\Model;



    class LoginModel extends Model {
        public function getUsuario(){
        $builder = $this->db->table("usuarios");
        $builder->select('*');
        $result=$builder->get();
        return $result->getResultArray();
    }
            
        
    }