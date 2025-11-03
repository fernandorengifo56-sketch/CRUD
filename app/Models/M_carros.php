<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_carros extends Model{
    protected $table      = 'carros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ID'; //protejer la primary key del modelo de tabla
    protected $allowedFields= ['NOMBRE','MODELO','T_MOTOR','COMBUSTIBLE','TRANS','PUERTAS','PLAZAS','AÑO']; //permitir la modificacion de los campos del modelo de tabla
}