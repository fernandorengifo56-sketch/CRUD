<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    Catalogo de Carros
    <?php print_r($C_carros); ?>
    <div class="container"> 
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
                    <th>Motor</th>
                    <th>Combustible</th>
                    <th>Transmisión</th>
                    <th>Puertas</th>
                    <th>Plazas</th>
                    <th>Año</th>
                    <th>*</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modelo</th>
                    <th>Motor</th>
                    <th>Combustible</th>
                    <th>Transmisión</th>
                    <th>Puertas</th>
                    <th>Plazas</th>
                    <th>Año</th>
                    <th>Editar/Eliminar</th>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>