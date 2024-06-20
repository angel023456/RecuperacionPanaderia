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
  <form id="formuusuario" name="formuusuario" method="post">
    <div class="form-group">
      <label for="Nombre">Nombre:</label>
      <input type="text" name ="Nombre" class="form-control" id="Nombre">
    </div>
    <label for= "email">Email:</label>
    <input type="text" name = "Email" class = "form-control" id="Email">
    <label for ="Telefono"> Telefono: </label>
    <input type = "tel" name ="telefono" class = "form-control" id = "Telefono">

    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesa.php">Agregar cliente</button>
  </form>
</div>

</body>
</html>