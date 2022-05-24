<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <script src="public/js/formulario.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/modal_card.css" rel="stylesheet">
</head>
<body>
<?php 
    include("resources/connection_api.php");
    include("resources/templates/header.php");
?>
     <form 
     action="registro.php" 
     method="post" 
     onsubmit="return validarFormulario();"
     name="formulario"
     class="flex">
        <label for="usuario"></label><br>
        <input type="text" placeholder="Usuario" name="campoUsuario" id="probemos" class="form-control me-2"><br><br>

       <label for="pass"></label><br>
        <input type="text" placeholder="Password" name="campoPass" class="form-control me-2"><br><br>

        <label for="passConfirm"></label><br>
        <input type="text" placeholder="Confirmacion password" name="campoPassConfirm" onkeyup=confirmacionPass(); class="form-control me-2"><br>
        <div class="fallo" id="confirmacion"></div><br>

        <label for="email"></label><br>
        <input type="text" placeholder="email" name="campoEmail" class="form-control me-2"><br><br>

        <input type="submit" value="Enviar" name="enviar" id="enviar" class="btn btn-success"><br><br>
        <div id="error"></div>
     </form> 


     <?php

            if (isset($_REQUEST["enviar"])) {

                require 'resources/conexion.php';

                $usuario = $_REQUEST["campoUsuario"];
                $pass = $_REQUEST["campoPass"];
                $email = $_REQUEST["campoEmail"];

                $insercion = "INSERT into users (USUARIO,PASSWORD,EMAIL) values (:usuario,:pass,:email)";

                $preparedStatement = $conexion->prepare($insercion);
                $preparedStatement->bindParam(":usuario", $usuario);
                $preparedStatement->bindParam(":pass", $pass);
                $preparedStatement->bindParam(":email", $email);
                $filasAlteradas = $preparedStatement->execute();

            }   

            echo "El producto $usuario se ha grabado de forma correctaen la base de datos.";
    ?>

    <div>
        <div class='row' id='colocar'>
            <p>El usuario <?= $usuario ?> se ha dado de alta de forma correcta.</p>
        </div>
    </div>

    <?php include("resources/templates/footer.php") ;?>
</body>
</html>