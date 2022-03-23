<?php

namespace App\Controllers;


class Home extends BaseController
{
    protected $datos=[];
    protected $producto_model;
    public function __construct()
    {
        $this->datos["titulo_encabezado"]="Home";
        $this->datos["fecha"]= getdate();
        $this->datos["archivo"]=fopen(base_url("archivos/texto.txt"),'r');

    }
    public function index()
    {
        echo view("header",$this->datos);
       echo  view("home.php",$this->datos);
       echo  view("footer");
    }
}
