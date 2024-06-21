<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Agregar cliente</h2>
  <form id="formuusuario" name="formuusuario" method="post" action="procesa-clientes.php">
    <div class="form-group">
      <label for="Nombre">Nombre:</label>
      <input type="text" name="Nombre" class="form-control" id="Nombre">
    </div>
    <div class="form-group">
      <label for="Apellidos">Apellidos:</label>
      <input type="text" name="Apellidos" class="form-control" id="Apellidos">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" name="Email" class="form-control" id="Email">
    </div>
    <div class="form-group">
      <label for="Telefono">Teléfono:</label>
      <input type="tel" name="Telefono" class="form-control" id="Telefono">
    </div>
    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar">Agregar cliente</button>
  </form>
</div>

</body>
</html>
