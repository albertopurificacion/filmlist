<?php

$servername = "localhost";
//$port = 9550; //especificamos puerto si no es el 3306
$username = "root";
$password = "";
$dbname = "tienda";

try{
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<strong>Conexion exitosa</strong><br>";
}catch(PDOException $e){
    echo "Fallo de conexión" . $e->getMessage();
}


?>