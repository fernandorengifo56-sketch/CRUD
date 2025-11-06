<?=$header?>
<br>



<div class="card">
    <div class="card-body">
        <h5 class="card-title">Añadir Carros</h5>
        <p class="card-text"><form method="post" action="<?= base_url('/agregar') ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="modelo">Modelo</label>
    <input id="modelo" value="<?=old('modelo')?>" class="form-control" type="text" name="modelo">
  </div>

  <div class="form-group">
    <label for="combustible">Combustible</label>
    <input id="combustible" value="<?=old('combustible')?>"  class="form-control" type="text" name="combustible">
  </div>

  <div class="form-group">
    <label for="transmision">Transmisión</label>
    <input id="transmision" value="<?=old('transmision')?>"  class="form-control" type="text" name="transmision">
  </div>

  <div class="form-group">
    <label for="color">Color</label>
    <input id="color" value="<?=old('color')?>"  class="form-control" type="text" name="color">
  </div>

  <div class="form-group">
    <label for="motor">Motor</label>
    <input id="motor" value="<?=old('motor')?>" class="form-control" type="text" name="motor">
  </div>

  <div class="form-group">
    <label for="plazas">Plazas</label>
    <input id="plazas" value="<?=old('plazas')?>" class="form-control" type="text" name="plazas">
  </div>

  <div class="custom-file form-group">
    <label for="muestra" class="custom-file-label">Muestra</label>
    </div style="margin-top: 30px;">
    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?='muestra'?>" width="100" alt="">
    </div>
    <input id="muestra" class="custom-file-input" type="file" name="muestra">
  </div>

  <button class="btn btn-success" type="submit">Agregar</button>
</form></p>
    </div>
</div>










    <?=$fooder?>