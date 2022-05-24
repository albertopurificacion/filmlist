<html>
    <body>
        <form
            action="insercion.php" 
            method="GET" 
            onsubmit="return validarFormulario();"
            name="formulario">
            <label for="nombreProducto">Nombre de producto</label><br>
            <input type="text" name="nombreProducto" id="nomProducto"><br><br>
            <label for="precioProducto">Precio de producto</label><br>
            <input type="text" name="precioProducto" id="precProducto"><br><br>
            Esta dispponible:
            <input type="radio" name="disponible" value="1">Si</input>
            <input type="radio" name="disponible" value="0">No</input>
            <br><br>
            <input type="submit" value="Enviar" name="enviar"><br><br>
        </form>

        <?php

            if (isset($_REQUEST["enviar"])) {

                require 'conexion.php';

                $nombre = $_REQUEST["nombreProducto"];
                $precio = $_REQUEST["precioProducto"];
                $disponible = $_REQUEST["disponible"];

                $insercion = "INSERT into articulo (NOMBRE,PRECIO,DISPONIBLE) values (:nombre,:precio,:disponible)";

                $preparedStatement = $conexion->prepare($insercion);
                $preparedStatement->bindParam(":nombre", $nombre);
                $preparedStatement->bindParam(":precio", $precio);
                $preparedStatement->bindParam(":disponible", $disponible);
                $filasAlteradas = $preparedStatement->execute();

                echo "El producto $nombre, con precio $precio €, se ha grabado de forma correctaen la base de datos.";

            }   
        ?>
    </body>
</html>