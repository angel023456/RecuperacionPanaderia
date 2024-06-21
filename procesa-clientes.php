<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
<?php
// Configuración de la base de datos
$servername = 'localhost';
$username = 'usuario';
$password = '1234';
$dbname = 'panaderia';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $_POST['Nombre'] ;
$apellidos = $_POST['Apellidos'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'] ;

// Validar que los campos no estén vacíos
if (!empty($nombre) && !empty($apellidos) && !empty($email) && !empty($telefono)) {
        // Crear la sentencia SQL de inserción
        $sql = "INSERT INTO clientes (nombre, apellidos, email, telefono) VALUES ('$nombre', '$apellidos', '$email', '$telefono')";

        // Ejecutar la consulta y verificar
        if ($conn->query($sql) === TRUE) {
            echo "Inserción de datos exitosa". "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "El correo electrónico no es válido.";
    }
} else {
    echo "Por favor, complete todos los campos.";
}

// Cerrar conexión
$conn->close();
?>
</body>
