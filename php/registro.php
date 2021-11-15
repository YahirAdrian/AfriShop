<?php
    $servername = "localhost";
    $database = "id15421031_afrishop";
    $username = "id15421031_afrika";
    $password = "TiendaAfrishop122;";

    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
	$correo = $_POST['correo'];

    $conexion = new mysqli($servername, $username, $password, $database);
            
    if($conexion->connect_error){
        die('Error de Conexion ('.$database->connect_error.')'.$database->connect_error);
    }

    $sql = "INSERT INTO usuarios (id,Nombre,Contraseña,Correo,Activo) VALUES (NULL, '$usuario', '$pass', '$correo', '0');";
    if (mysqli_query($conexion, $sql)) {
        /*Si se hace la inserccion correctamente, se redirige al loging*/
		echo "Registrado exitosamente";
		echo = "<center><a href='../index.html' style='width: 70%; height:50px; background:#85CDE8;'>Iniciar sesion</a></center>";
    }
    $conexion -> close();

?>