<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_carros;
class C_carros extends Controller{

       public function index(){
              //VARIABLES
              $carro= new M_carros(); //variable que crea un modelo para albergar los datos de la tabla
              $dat['C_carros']= $carro->orderBy('ID','ASC')->findAll(); //variable que maneja los datos del modelo ya creado

        return view('carros/r',$dat); //muestra los datos
       }

}