<?php
session_start();

$alias = $_POST['alias'];

if (isset($alias) && $alias != '') {
    // llamar al archivo de conexión
    require_once 'conexion.php';
    
    $sql = "SELECT alias, nombre, apellido, direccion, celular, correo, nacimiento, rutaImagen FROM usuario WHERE alias = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $alias);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $_SESSION["alias"] = $row['alias'];
        $_SESSION["nombre"] = $row['nombre'];
        $_SESSION["apellido"] = $row['apellido'];
        $_SESSION["direccion"] = $row['direccion'];
        $_SESSION["rutaImagen"] = $row['rutaImagen'];
        $_SESSION["correo"] = $row['correo'];
        $stmt->close();
        $conn->close();

        header("location: archivo3.php");
    } else {
        // Cierra la conexión
        $stmt->close();
        $conn->close();
        header("location: archivo1.php");
    }
} else {
    header("location: archivo1.php");
}
?>
