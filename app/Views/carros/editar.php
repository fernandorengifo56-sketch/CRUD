<?=$header?>
<br>
<br>



<div class="card">
    <div class="card-body">
        <h5 class="card-title">Añadir Carros</h5>
        <p class="card-text"><form method="post" action="<?= base_url('/actualizar') ?>" enctype="multipart/form-data">
 
 
    <input type="hidden" name="id" value="<?= esc($M_carro['id']) ?>">
 
 
        <div class="form-group">
    <label for="modelo">Modelo</label>
    <input id="modelo" value=<?=$M_carro['modelo']?> class="form-control" type="text" name="modelo">
  </div>

  <div class="form-group">
    <label for="combustible">Combustible</label>
    <select id="combustible" class="form-control" name="plazas">
                    <option value="" disabled selected>Seleccione el tipo de combustible</option>
                    <option value="1" <?= old('combustible') == 'Gasolina' ? 'selected' : '' ?>>Gasolina</option>
                    <option value="2" <?= old('combustible') == 'Diesel' ? 'selected' : '' ?>>Diesel</option>
                    <option value="4" <?= old('combustible') == 'Gas (GNV)' ? 'selected' : '' ?>>Gas (GNV)</option>
                    <option value="8" <?= old('combustible') == 'Electricidad' ? 'selected' : '' ?>>Electricidad</option>
                    <option value="32" <?= old('combustible') == 'Hidrogeno' ? 'selected' : '' ?>>Hidrogeno</option>
                </select>
  </div>

  <div class="form-group">
    <label for="transmision">Transmisión</label>
    <input id="transmision" value=<?=$M_carro['transmision']?> class="form-control" type="text" name="transmision">
  </div>

  <div class="form-group">
    <label for="color">Color</label>
    <input id="color" value=<?=$M_carro['color']?>  class="form-control" type="text" name="color">
  </div>

  <div class="form-group">
    <label for="motor">Motor</label>
    <input id="motor" value=<?=$M_carro['motor']?>  class="form-control" type="text" name="motor">
  </div>

  <div class="form-group">
    <label for="plazas">Plazas</label>
    <select id="plazas" class="form-control" name="plazas">
                    <option value="" disabled selected>Seleccione el número de plazas</option>
                    <option value="1" <?= old('plazas') == '1' ? 'selected' : '' ?>>1</option>
                    <option value="2" <?= old('plazas') == '2' ? 'selected' : '' ?>>2</option>
                    <option value="4" <?= old('plazas') == '4' ? 'selected' : '' ?>>4</option>
                    <option value="8" <?= old('plazas') == '8' ? 'selected' : '' ?>>8</option>
                    <option value="32" <?= old('plazas') == '32' ? 'selected' : '' ?>>32</option>
                </select>
  </div>

  <div class="custom-file form-group">
    <label for="muestra" class="custom-file-label">Muestra</label>
    </div style="margin-top: 30px;">
    <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$M_carro['muestra']?>" width="100" alt="">
    </div>
    <input id="muestra" class="custom-file-input" type="file" name="muestra">
  </div>

  <button class="btn btn-success" type="submit">actualizar</button>

</form></p>
    </div>
</div>










   
