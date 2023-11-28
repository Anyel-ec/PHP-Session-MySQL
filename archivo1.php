<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel</title>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>


<body>
    <!-- Formulario para buscar mediante el Alias-->
    <div class="container m-5">
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3">
                <form action="archivo2.php" method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="alias" class="form-label">Alias a buscar:</label>
                        <input type="text" name="alias" id="alias" required placeholder="Digite el alias a buscar" class="form-control">
                        <div class="invalid-feedback">Por favor, ingrese un alias.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>

        <div class="row">
           <?php
            // llamar al archivo de conexión
            /**
             * Retrieves all users from the database and displays them as a list.
             *
             * @param object $conn The database connection object.
             * @return void
             */
            require_once 'conexion.php';
            $sql = "SELECT * FROM usuario";
            $resultados = $conn->query($sql);

            if (!$resultados) {
                die("Error en la consulta: " . $conn->error);
            }

            while ($fila = $resultados->fetch_assoc()) {
                echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">';
                echo '<div class="d-flex w-100 justify-content-between">';
                echo '<h5 class="mb-1">' . $fila['alias'] . '</h5>';
                echo '<small>' . $fila['nombre'] . ' ' . $fila['apellido'] . '</small>';
                echo '</div>';
                echo '<p class="mb-1">' . $fila['correo'] . '</p>';
                echo '</a>';
            }

            // Cerrar la conexión
            $conn->close();

            ?>
        </div>

    </div>
</body>

</html>