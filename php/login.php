<?php
    $servername = "localhost";
    $database = "id15421031_afrishop";
    $username = "id15421031_afrika";
    $password = "TiendaAfrishop122;";

    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];

    $conexion = new mysqli($servername, $username, $password, $database);
            
    if($conexion->connect_error){
        die('Error de Conexion ('.$database->connect_error.')'.$database->connect_error);
    }

    $sql = "SELECT Nombre, Contraseña FROM usuarios WHERE Nombre = '$usuario' AND Contraseña = '$pass'";
    if ($resultado = mysqli_query($conexion, $sql)) {

        /* obtener el array asociativo */
        $fila = mysqli_fetch_row($resultado);
		
		if(count($fila) ==2){
			header("location: ../productos.html");
		}else{
			echo count($fila);
			echo $fila[0] . $fila[1];
			echo "Usuario y contraseña incorrecto";
		}
            
        /* liberar el conjunto de resultados */
        mysqli_free_result($resultado);
    }
    $conexion -> close();

?>