<!-- Header -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filmlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/modal_card.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark mt-5">
            <div class="container-fluid">
                <a class="navbar-brand title">imposible</a>
                <div class="d-flex">
                    <a class="btn btn-success" href="registro.php" target="_blank">Resgistrarse</a>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Usuario" aria-label="Usuario">
                    <input class="form-control me-2" type="search" placeholder="Contraseña" aria-label="Pass">
                    <button class="btn btn-success" type="submit">Identificarse</button>
                </form>
                <form class="d-flex"
                action="buscar.php"
                method="POST"
                name="busqueda"
                >
                    <input class="form-control me-2" name="pelicula" type="search" placeholder="Escribir..." aria-label="Search">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>    
