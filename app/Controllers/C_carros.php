<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_carros;
class C_carros extends Controller{

       public function index(){
              //VARIABLES
              $carro= new M_carros(); //variable que crea un modelo para albergar los datos de la tabla
              $dat['C_carros']= $carro->orderBy('ID','ASC')->findAll(); //variable que maneja los datos del modelo ya creado

               $dat['header'] = view('temas/header'); // el header
              $dat['fooder'] = view('temas/fooder'); // el fooder
              return view('carros/r',$dat); //muestra los datos
       }
   public function crear(){

       $dat['header'] = view('temas/header'); // el header
              $dat['fooder'] = view('temas/fooder'); // el fooder
       
       return view('carros/c', $dat);
}
       
       public function agregar(){
        $carro = new M_carros();

        // Obtener el archivo
        $muestra = $this->request->getFile('muestra');

        // Validar que exista y sea válido antes de mover
        if ($muestra && $muestra->isValid() && ! $muestra->hasMoved()) {
            $nuevoNombre = $muestra->getRandomName();

            // Mover usando FCPATH para evitar rutas relativas incorrectas
            $muestra->move(FCPATH . 'uploads', $nuevoNombre);

            $dat = [
                'modelo' => $this->request->getVar('modelo'),
                'combustible' => $this->request->getVar('combustible'),
                'transmision' => $this->request->getVar('transmision'),
                'motor' => $this->request->getVar('motor'),
                'color' => $this->request->getVar('color'),
                'plazas' => $this->request->getVar('plazas'),
                'muestra' => $nuevoNombre
            ];

            // Usar la instancia correcta ($carro) para insertar
            $carro->insert($dat);

            echo "ingresado a db";
            return;
        }

        // Si no llegó archivo o hubo error
        $error = $muestra ? $muestra->getErrorString() : 'No se envió archivo';
        echo "Error: " . $error;
    }
    public function eliminar($id=null){

        $dcarro = new M_carros(); //variable para eliminar un carro
        $datacarro = $dcarro->where('id',$id)->first(); //variable que le indica a la otra que registro de la tabla eliminar

        $muestra = ('../public/uploads/'.$datacarro['muestra']); //variable para borrar la imagen del respectivo registro
        unlink($muestra);
        
        $dcarro->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/r'));
    }
}

