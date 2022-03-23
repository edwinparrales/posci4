<?php

namespace App\Controllers;
use App\Models\ProductoModel;
class Producto extends BaseController
{
    protected $datos=[];
    protected $producto_model;
    public function __construct()
    {
        $this->datos["titulo_encabezado"]="Productos";
        $this->datos["titulo_main"]="Productos catalogo";
        $this->producto_model = new ProductoModel();
    }


    public function index(){
      $this->datos["lista_producto"]=$this->producto_model->findAll();
      echo view("header",$this ->datos);
      echo view("producto/index",$this->datos);
      echo view("footer");
   }


    public function crear()
    {
        echo view("header",$this->datos);
        echo view("producto/frm_crear");
        echo view("footer");

    }
    public function modificar($id)
    {
        $this->datos["producto"] = $this->producto_model->where('id',$id)->first();
        echo view("header",$this->datos);
        echo view("producto/frm_modificar",$this->datos);
        echo view("footer");

    }
}