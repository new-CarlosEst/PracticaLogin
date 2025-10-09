<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="venta.css">
    <title>Ventas</title>
</head>
<body>
    <div class="wrapper">
        <h2>Estas en ventas</h2>
        <?php 
            include_once "Usuario.php";
            //si esta la cookie
            if (isset($_COOKIE["datos_usuario"])){
                $datosCookie = json_decode($_COOKIE["datos_usuario"], true);
                echo $datosCookie["nombre"];
            }

        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <button class="btn btn-primary">Salir</button>
        </form>

    </div>
</body>
</html>