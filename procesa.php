<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
        // Recogemos datos de los formularios
        $Nombre = $_POST["Nombre"];
        $Nombrepan = $_POST["Nombrepan"];
        $Cantidad = $_POST["Cantidad"];
        $Cantidadpan = $_POST["Cantidadpan"];
        $tipo = $_POST["seleccionar"];
        $email = $_POST["Email"];
        $telefono = $_POST["telefono"];
        $descripcion = $_POST["descripcion"];

        // Conexión a la base de datos
        $servername = 'localhost';
        $username = 'usuario';
        $password = '1234';
        $database = 'panaderia';

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);

        }
        
        // Insertar datos de clientes
        if (!empty($Nombre)) {
            $insertarcliente = "INSERT INTO clientes (nombre,email,telefono) VALUES ('$Nombre' , '$email' , '$telefono');";
            if ($conn->query($insertarcliente) === TRUE) {
                echo "Inserción de datos exitosa para clientes<br>";
            } else {
                echo "Error al insertar datos para clientes: " . $conn->error . "<br>";
            }
        }

        // Insertar datos de pan
   
        $insertarpan = "INSERT INTO pan (nombre, cantidad,descripcion) VALUES ('$Nombrepan', '$Cantidad','$descripcion');";
        if ($conn->query($insertarpan) === TRUE) {
            echo "Inserción de datos exitosa para pan<br>";
        } else {
            echo "Error al insertar datos para pan: " . $conn->error . "<br>";
        }

        // Insertar datos de pedidos
        if (!empty($tipo) && !empty($Cantidadpan)) {
            $insertarpedido = "INSERT INTO pedidos cantidad,tipo,fecha_pedido) VALUES ($Cantidadpan,'$tipo',now());";
            if ($conn->query($insertarpedido) === TRUE) {
                echo "Inserción de datos exitosa para pedidos<br>";
            } else {
                echo "Error al insertar datos para pedidos: " . $conn->error . "<br>";
            }
        } 