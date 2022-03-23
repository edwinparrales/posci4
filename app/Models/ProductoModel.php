<?php
namespace App\Models;
use CodeIgniter\Model;
class ProductoModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['descripcion', 'marca','modelo','precio','url_imagen','id_categoria','cantidad','codigo'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_cre';
    protected $updatedField  = 'fecha_act';
    //protected $deletedField  = 'deleted_at';

   protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}