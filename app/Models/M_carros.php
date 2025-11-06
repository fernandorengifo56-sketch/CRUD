<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_carros extends Model{
    protected $table      = 'tablanueva';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ID'; //protejer la primary key del modelo de tabla
    protected $allowedFields= ['modelo','combustible','transmision','motor','color','plazas','muestra']; //permitir la modificacion de los campos del modelo de tabla
}