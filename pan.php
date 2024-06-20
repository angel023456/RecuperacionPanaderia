<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panes</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Agregar pan</h2>
  <form id="formuusuario" name="formuusuario" method="post">
    <div class="form-group">
      <label for="Nombrepan">Nombre:</label>
      <input type="text" name="Nombrepan" class="form-control" id="Nombrepan">
    </div>
    <div class="form-group">
      <label for="Cantidad">Cantidad:</label>
      <input type="text" name="Cantidad" class="form-control" id="Cantidad">
    </div>
    <div class="form-group">
      <label for="descripcion">descripción:</label>
      <input type="text" name="descripcion" class="form-control" id="descripcion">
    </div>
    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesa.php">Agregar pan</button>
  </form>
</div>

</body>
</html>

