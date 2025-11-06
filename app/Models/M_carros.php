<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_carros extends Model{
    protected $table      = 'carros';

    protected $primaryKey = 'ID'; //protejer la primary key del modelo de tabla
    protected $allowedFields= ['modelo','combustible','transmision','motor','color','plazas','muestra']; //Modelo de la tabla tal cual como esta en nuestra bdd
}//ahora podemos manipularla :)