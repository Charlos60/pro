<?php

namespace App\Models;

use CodeIgniter\Model;

class ZapatoModel extends Model
{
    public function getZapato(){
        $builder = $this->db->table("zapatos");
        $builder->select('*');
        $result=$builder->get();
        return $result->getResultArray();
    }
    public function insertZapato($zapato){
        $builder = $this->db->table("zapatos");
        $result= $builder->insert($zapato);
        return $result;
    }

    public function deleteZapato($id){
        $result = $this->db->query("Delete from zapatos where idzapato= $id");
        return $result;
    }
    public function updateZapato($zapato,$id){
        $id2=$id;
        $nombre=$zapato['nombre'];
        $talla=$zapato['talla'];
        $marca=$zapato['marca'];
        $result = $this->db->query("update zapatos set nombre='$nombre',talla='$talla',marca='$marca' where idzapato= $id2");
        return $result;
        
        
    }
    
}