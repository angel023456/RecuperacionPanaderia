<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Agregar pedido</h2>
  <form id="formupedido" name="formupedido" method="post" action="procesa.php">
    <div class="form-group">
     
    <!-- Metemos formulario para panes>
      -->
      <?php
          //Variables para la conexión a la base de datos
          $servername = 'localhost';
          $username = 'usuario';
          $password = '1234';

          //Establecemos conexión
        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "panaderia");

         //Creamos la consulta SQL

         $consultar = "SELECT nombre FROM pan";

        //Ejecutamos la sentencia

         $registros=mysqli_query($conn,$consultar);
	
        echo "<label for='seleccionar'>Eliga el tipo de pan</label>";
        echo "<select name='seleccionar' id='seleccionar'>";
        while($registro=mysqli_fetch_row($registros)){
            
        echo "<option value='$registro[0]'>".$registro[0] ."</option>";
            
        }
        echo "</select>";

      ?>
    </div>
    <div class="form-group">
    
    </div>

    <div class="form-group">
      <label for="Cantidadpan">Cantidadpan:</label>
      <input type="text" class="form-control" id="Cantidadpan" name="Cantidadpan">
    </div>
 
    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesa.php">Agregar pedido</button>   
      
  </form>
</div>

</body>
</html>