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

       
        $muestra = $this->request->getFile('muestra');

        // Validar que exista y sea valido antes de mover
        if ($muestra && $muestra->isValid() && ! $muestra->hasMoved()) {
            $nuevoNombre = $muestra->getRandomName();

            // Mover usando fcpaht para evitar rutas relativas incorrectas
            $muestra->move(FCPATH . 'uploads', $nuevoNombre);

            $dat = [
                'modelo' => $this->request->getVar('modelo'),
                'combustible' => $this->request->getVar('combustible'),
                'transmision' => $this->request->getVar('transmision'),
                'motor' => $this->request->getVar('motor'),
                'color' => $this->request->getVar('plazas'),
                'plazas' => $this->request->getVar('modelo'),
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



<<<<<<< HEAD


























public function editar($id = null){
=======
        return $this->response->redirect(site_url('/r'));
    }
  
  public function editar($id = null){
>>>>>>> parent of 8863f10 (validaciones)

    print_r($id);

     $carro = new M_carros();

     $dat['M_carro'] = $carro->where('id', $id)->first();

    $dat['header'] = view('temas/header'); // el header
    $dat['fooder'] = view('temas/fooder'); // el fooder


     return view('carros/editar', $dat);


}

    
    public function actualizar(){

        $carro = new M_carros();

        $id = $this->request->getVar('id');

        $muestra = $this->request->getFile('muestra');
        $dat = [
            'modelo' => $this->request->getVar('modelo'),
            'combustible' => $this->request->getVar('combustible'),
            'transmision' => $this->request->getVar('transmision'),
            'motor' => $this->request->getVar('motor'),
            'color' => $this->request->getVar('color'),
            'plazas' => $this->request->getVar('plazas')];

        // Validar que exista y sea valido antes de mover
        if ($muestra && $muestra->isValid() && ! $muestra->hasMoved()) {
            $nuevoNombre = $muestra->getRandomName();

            // Mover usando fcpaht para evitar rutas relativas incorrectas
            $muestra->move(FCPATH . 'uploads', $nuevoNombre);


}
          $id = $this->request->getVar('id');
          $carro->update($id, $dat);
          return $this->response->redirect(site_url('/r'));        
}

}










































