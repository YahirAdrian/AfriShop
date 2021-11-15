<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Afrishop</title>
        <link rel="stylesheet" href="css/productos.css"/>
    </head>
    <body>
		<?php
			$servername = "localhost";
			$database = "id15421031_afrishop";
			$username = "id15421031_afrika";
			$password = "TiendaAfrishop122;";
			
			$conexion = new mysqli($servername, $username, $password, $database);
            $conexion->set_charset("utf8");
			
			if ($conexion->connect_error){
                die('Error de Conexion ('.$db->connect_error.')'.$db->connect_error);
            }
		?>
        <header>
            <p id="logotipo">Afrishop</p>
            
            <div class="buscar">
                <input type="text" class="input_search" placeholder="Buscar" name="busqueda"/>
                <button type="submit" class="imagen_cabecera icono_buscar"></button>
            </div>

            <div class="opciones">
                <a href="carrito.html"><img src="src/carrito.png" class="imagen_cabecera" /></a>
                <a href="perfil.html"><img src="src/usuario.png" class="imagen_cabecera"/></a>
            </div>
        </header>

        <section>
            
				<?php

                    $query_perros = "SELECT * FROM Productos WHERE Categoria = 'perros';";
                    $query_gatos = "SELECT * FROM Productos WHERE Categoria = 'gatos';";
                    $query_hamsters = "SELECT * FROM Productos WHERE Categoria = 'hamsters';";
                    $query_aves = "SELECT * FROM Productos WHERE Categoria = 'aves';";
                    $query_peces = "SELECT * FROM Productos WHERE Categoria = 'peces';";

                    //Consulta de perros
					$result = $conexion->query($query_perros);
                    $numfilas = $result->num_rows;

                    echo "<div class = 'display_productos'>";
                    echo "<h2 class='categoria_producto'>Perros</h2>";
					for ($x=0;$x<$numfilas;$x++) {
                        $fila = $result->fetch_object();
                        
						echo "<div class='producto'>";
                        //echo "<img src='src/productos/" . $fila->Imagen . "' alt='producto'/>";
                        echo "<img src='src/producto.png'class='imagen_producto' alt='producto'/>";
                        echo "<p class='nombre_producto'>" . $fila->Nombre . "</p>";
                        echo "<p class='precio_producto'>$" . $fila->Precio . "</p>";
                        echo "</div>";
					}
                    $result->free();
                    echo "</div><hr/>";


                    //Consulta de gatos
					$result = $conexion->query($query_gatos);
                    $numfilas = $result->num_rows;

                    echo "<div class = 'display_productos'>";
                    echo "<h2 class='categoria_producto'>Gatos</h2>";
					for ($x=0;$x<$numfilas;$x++) {
                        $fila = $result->fetch_object();
                        
						echo "<div class='producto'>";
                        //echo "<img src='src/productos/" . $fila->Imagen . "' alt='producto'/>";
                        echo "<img src='src/producto.png'class='imagen_producto' alt='producto'/>";
                        echo "<p class='nombre_producto'>" . $fila->Nombre . "</p>";
                        echo "<p class='precio_producto'>$" . $fila->Precio . "</p>";
                        echo "</div>";
					}
                    $result->free();
                    echo "</div><hr/>";

                    //Consulta de hamsters
					$result = $conexion->query($query_hamsters);
                    $numfilas = $result->num_rows;

                    echo "<div class = 'display_productos'>";
                    echo "<h2 class='categoria_producto'>Hamsters</h2>";
					for ($x=0;$x<$numfilas;$x++) {
                        $fila = $result->fetch_object();
                        
						echo "<div class='producto'>";
                        //echo "<img src='src/productos/" . $fila->Imagen . "' alt='producto'/>";
                        echo "<img src='src/producto.png'class='imagen_producto' alt='producto'/>";
                        echo "<p class='nombre_producto'>" . $fila->Nombre . "</p>";
                        echo "<p class='precio_producto'>$" . $fila->Precio . "</p>";
                        echo "</div>";
					}
                    $result->free();
                    echo "</div><hr/>";

                    //Consulta de aves
					$result = $conexion->query($query_aves);
                    $numfilas = $result->num_rows;

                    echo "<div class = 'display_productos'>";
                    echo "<h2 class='categoria_producto'>Aves</h2>";
					for ($x=0;$x<$numfilas;$x++) {
                        $fila = $result->fetch_object();
                        
						echo "<div class='producto'>";
                        //echo "<img src='src/productos/" . $fila->Imagen . "' alt='producto'/>";
                        echo "<img src='src/producto.png'class='imagen_producto' alt='producto'/>";
                        echo "<p class='nombre_producto'>" . $fila->Nombre . "</p>";
                        echo "<p class='precio_producto'>$" . $fila->Precio . "</p>";
                        echo "</div>";
					}
                    $result->free();
                    echo "</div><hr/>";

                    //Consulta de peces
					$result = $conexion->query($query_peces);
                    $numfilas = $result->num_rows;

                    echo "<div class = 'display_productos'>";
                    echo "<h2 class='categoria_producto'>Peces</h2>";
					for ($x=0;$x<$numfilas;$x++) {
                        $fila = $result->fetch_object();
                        
						echo "<div class='producto'>";
                        //echo "<img src='src/productos/" . $fila->Imagen . "' alt='producto'/>";
                        echo "<img src='src/producto.png'class='imagen_producto' alt='producto'/>";
                        echo "<p class='nombre_producto'>" . $fila->Nombre . "</p>";
                        echo "<p class='precio_producto'>$" . $fila->Precio . "</p>";
                        echo "</div>";
					}
                    $result->free();
                    echo "</div>";
				?>
        </section>
    </body>
</html>