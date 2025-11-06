 <?=$header?>
<br>

<a href="<?=base_url('c')?>" class="btn btn-danger" type="button">añadir vehiculo </a>
<br>
 <div class="container"> 
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Combustible</th>
                    <th>Transmisión</th>
                    <th>Motor</th>
                    <th>Color</th>
                    <th>plazas</th>
                    <th>muestra</th>
                    <th>*</th>                   
                </tr>
            </thead>
            <tbody>

            <?php foreach($C_carros as $carro): ?>
    <tr>
        <th><?=$carro['id']?></th>
      
              <td><?=$carro['modelo']?></td>
        <td><?=$carro['combustible']?></td>
        <td><?=$carro['transmision']?></td>
        <td><?=$carro['motor']?></td>
        <td><?=$carro['color']?></td>
        <td><?=$carro['plazas']?></td>
        <td><?=$carro['muestra']?></td>
        <th>
            <a href="<?=base_url('d/'.$carro['id']);?>"class="btn btn-danger" type="button">Eliminar</a>
           <a href="<?=base_url('editar/'.$carro['id'])?>" class="btn btn-warning" type="button">editar</a>
        </th>
      
      

    </tr>
<?php endforeach; ?>

            </tbody>
        </table>

     <?=$fooder?>