<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_carros;
class C_carros extends Controller{

       public function index(){ //Para la pag principal donde está la tabla
              //VARIABLES
              $carro= new M_carros(); //variable que crea un modelo para albergar los datos de la tabla
              $dat['C_carros']= $carro->orderBy('ID','ASC')->findAll(); //variable que maneja los datos del modelo ya creado

               $dat['header'] = view('temas/header'); // el header
              $dat['fooder'] = view('temas/fooder'); // el fooder
              return view('carros/r',$dat); //muestra los datos
       }
   public function crear(){ //Para añadir carros

       $dat['header'] = view('temas/header'); // el header
              $dat['fooder'] = view('temas/fooder'); // el fooder
       
       return view('carros/c', $dat);
}
       
       public function agregar(){ //Para agragar las imagenes
        $carro = new M_carros();

       
        $muestra = $this->request->getFile('muestra');

        // Validar que la imagn exista y sea valida antes de mover
        if ($muestra && $muestra->isValid() && ! $muestra->hasMoved()) {
            $nuevoNombre = $muestra->getRandomName();

            // Mover usando fcpaht para evitar rutas relativas incorrectas
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

            // (notica)Usar la instancia correcta ($carro) para insertar
            $carro->insert($dat);

            return $this->response->redirect(site_url('/r'));
        }

        // Si no llegó la imagen o hubo error
        $error = $muestra ? $muestra->getErrorString() : 'No se envió archivo';
        echo "Error: " . $error;
    }
  
      public function eliminar($id=null){ //Para eliminar un carro

        $dcarro = new M_carros(); //variable para eliminar cualquier carro
        $datacarro = $dcarro->where('id',$id)->first(); //variable que le indica a la otra que registro de la tabla eliminar

        $muestra = ('../public/uploads/'.$datacarro['muestra']); //variable para borrar la imagen del carro en cuestion
        unlink($muestra);
        
        $dcarro->where('id',$id)->delete($id); //adios imagen

        return $this->response->redirect(site_url('/r')); //volver a la pag principal
    }
  
  public function editar($id = null){ //Para cambiar los datos dl carro

    print_r($id);

     $carro = new M_carros();

     $dat['M_carro'] = $carro->where('id', $id)->first();

    $dat['header'] = view('temas/header'); // el header
    $dat['fooder'] = view('temas/fooder'); // el fooder


     return view('carros/editar', $dat);


}

    
    public function actualizar(){ //Para cambiar la imagen del carro

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

        // Validar que exista la imgaeny sea valido antes de mover
        if ($muestra && $muestra->isValid() && ! $muestra->hasMoved()) {
            $nuevoNombre = $muestra->getRandomName();

            // Mover usando fcpaht para evitar rutas relativas incorrectas (el otro codgio del tutorial no funcionó aquí y idk porqué .-.)
            $muestra->move(FCPATH . 'uploads', $nuevoNombre);


}
          $id = $this->request->getVar('id');
          $carro->update($id, $dat);
          return $this->response->redirect(site_url('/r'));        //retorno al la pag principal (la vista de la tabla)
}

}










































