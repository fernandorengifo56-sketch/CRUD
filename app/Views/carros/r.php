 <?=$header?>
<br>

<a href="<?=base_url('c')?>" class="btn btn-danger" type="button">añadir vehiculo </a>

 <div class="container"> 
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Combustible</th>
                    <th>Transmisión</th>
                    <th>Color</th>
                    <th>Motor</th>
                    <th>plazas</th>
                    <th>muestra</th>
                    <th>*</th>                   
                </tr>
            </thead>
            <tbody>

            <?php foreach($C_carros as $carro): ?>
    <tr>
        <th><?=$carro['id']?></th>
        <th><?=$carro['modelo']?></th>
        <th><?=$carro['combustible']?></th>
        <th><?=$carro['transmision']?></th>
        <th><?=$carro['color']?></th>
        <th><?=$carro['motor']?></th>
        <th><?=$carro['plazas']?></th>
        <th><?=$carro['muestra']?></th>
        <th>
        
        
        
        <a href="<?=base_url('editar/'.$carro['id'])?>" class="btn btn-warning" type="button">editar</a>/Eliminar</th>
    </tr>
<?php endforeach; ?>

            </tbody>
        </table>

     <?=$fooder?>