<?php
session_start();

if (isset($_SESSION["alias"]) && isset($_SESSION["nombre"]) && isset($_SESSION["apellido"]) && isset($_SESSION["direccion"]) && isset($_SESSION["rutaImagen"]) && isset($_SESSION["correo"])) {
    $alias = $_SESSION["alias"];
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $direccion = $_SESSION["direccion"];
    $rutaImagen = $_SESSION["rutaImagen"];
    $correo = $_SESSION["correo"];
} else {
    header("location: archivo1.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5 text-center">
        <center>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $rutaImagen; ?>" class="card-img-top" alt="User Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nombre . ' ' . $apellido; ?></h5>
                        <p class="card-text">
                            <strong>Alias:</strong> <?php echo $alias; ?><br>
                            <strong>Dirección:</strong> <?php echo $direccion; ?><br>
                            <strong>Correo:</strong> <?php echo $correo; ?><br>
                        </p>
                        <a href="cerrar.php">Cerrar sesion</a>
                    </div>
                </div>
            </div>
        </div>
        </center>
        
    </div>
</body>
</html>