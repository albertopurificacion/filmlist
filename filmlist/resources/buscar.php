<?php 
    include("resources/connection_api.php");
    include("resources/templates/header.php");
?>

<?php

if (isset($_REQUEST["enviar"])) {

    require 'conexion.php';

    $pelicula = $_REQUEST["pelicula"];

    $resultados = "SELECT * FROM articulo where NOMBRE like :pelicula";

    $preparedStatement = $conexion->prepare($resultados);

    $peliculaFiltrado = "%$pelicula%";

    $preparedStatement->bindParam(":nombre", $peliculaFiltrado);
    $preparedStatement->execute();

    $productos = $preparedStatement->fetchAll();
    echo "<h2>Se han encontrado " . count($productos) . " productos.</h2>";

    foreach ($productos as $clave => $producto) {

        echo "<h3> El producto con el numero de ID " . $producto["ID"] . " es:</h3>";
        echo "<h4>" . $producto["NOMBRE"] . "</h4>";

        if ($producto["DISPONIBLE"] == 1) {
            echo "El articulo esta disponible";
        }else {
            echo "El articulo no esta disponible";
        }

        echo "<br>";
        echo "Precio: " . $producto["PRECIO"] . " euros.";
    } 
}