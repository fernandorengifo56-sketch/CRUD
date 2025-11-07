 <?=$header?>
 <br>

<br>
 <div class="container mt-4"> 
    
    <div class="card shadow-lg mb-4">
        
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            
            <h5 class="mb-0 text-primary">Listado de Vehículos Chevrolet</h5>
            
            <a href="<?=base_url('c')?>" class="btn btn-primary d-flex align-items-center" type="button">
                <i class="fas fa-plus-circle mr-2"></i>Añadir Vehículo
            </a>
            
        </div>
        
        <div class="card-body p-0">
            
            <div class="table-responsive">
                
                <table class="table table-striped table-hover align-middle mb-0">
                    
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Modelo</th>
                            <th>Combustible</th>
                            <th>Transmisión</th>
                            <th>Motor</th>
                            <th>Color</th>
                            <th>Plazas</th>
                            <th>Muestra</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                    <?php foreach($C_carros as $carro): ?>
                        <tr>
                            <th scope="row"><?=$carro['id']?></th>
                            <td><?=$carro['modelo']?></td>
                            <td><?=$carro['combustible']?></td>
                            <td><?=$carro['transmision']?></td>
                            <td><?=$carro['motor']?></td>
                            <td><?=$carro['color']?></td>
                            <td><?=$carro['plazas']?></td>
                            <td>
                                <img class="img-thumbnail" 
                                     src="<?=base_url()?>/uploads/<?=$carro['muestra']?>" 
                                     style="width: 100px; height: 60px; object-fit: cover;" 
                                     alt="Imagen de <?=$carro['modelo']?>">
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="<?=base_url('editar/'.$carro['id'])?>" class="btn btn-warning btn-sm mr-1" type="button">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <a href="<?=base_url('d/'.$carro['id']);?>" class="btn btn-danger btn-sm" type="button">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div> </div> </div> </div> `
     <?=$fooder?>