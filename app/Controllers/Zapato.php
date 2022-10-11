<?php

namespace App\Controllers;
use App\Models\ZapatoModel;


class Zapato extends BaseController
{
    protected $zapatoModel;
    protected $request;
    public function __construct()
    {
        $this->zapatoModel = new ZapatoModel();
        $this->request = service('request');
        $this->uri = service('uri');

    }


    public function formulario_zapato()
     {
        return view("insertarzapato");
     }
     public function vista_editar()
     {
        return view("formularioeditarzapato");
     }


    public function insertar_zapato()
    {
        $zapato["nombre"] = $this->request->getPost("nombre");
        $zapato["talla"] = $this->request->getPost("talla");
        $zapato["marca"] = $this->request->getPost("marca");
        $result =$this->zapatoModel->insertZapato($zapato);
        $result2 =$this->zapatoModel->getZapato();
        $datos["zapato"] =$result2;
        return view("mostrarZapatos",$datos);
    }

    public function mostrar_zapato()
    {
        $result =$this->zapatoModel->getZapato();
        $datos["zapato"] =$result;
        return view("mostrarZapatos",$datos);
    }

    public function borrar_zapato(){
        $id = $this->uri->getSegment(2);//id del empleado en la ruta
        $result = $this->zapatoModel->deletezapato($id);
        $result2 =$this->zapatoModel->getZapato();
        $datos["zapato"] =$result2;
        return view("mostrarzapatos",$datos);
    }

    public function editar_zapato(){
        $id= $this->uri->getSegment(2); 
        $zapato["nombre"] = $this->request->getPost("nombres");
        $zapato["talla"] = $this->request->getPost("talla");
        $zapato["marca"] = $this->request->getPost("marca");
        $result =$this->zapatoModel->updateZapato($zapato,$id);


        
        $result2 =$this->zapatoModel->getZapato();
        $datos["zapato"] =$result2;

        return view("mostrarzapatos",$datos);
    }


 

}