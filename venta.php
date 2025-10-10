<?php
    //Si la cookie no esta, te devuelve a login
    if (!isset($_COOKIE["datos_usuario"])){
        header("location: login.php");
    }
    else {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //Detecto si ha tocado el boton de salir
            if (isset($_POST["salir"])){
                //borro la cookie 
                setcookie("datos_usuario", "", time()-3600);
                //voy a login
                header("location: login.php");
                exit; //Exit lo que hace es para que la pagina se muera
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/venta.css">
    <title>Ventas</title>
</head>
<body>
    <div class="wrapper">
        <h2>Estas en ventas</h2><br/>
        <?php 
            include_once "Usuario.php";
            //si esta la cookie
            if (isset($_COOKIE["datos_usuario"])){
                $datosCookie = json_decode($_COOKIE["datos_usuario"], true);
                echo "<h2><i>Nombre: </i>" . $datosCookie["nombre"] . "</h2>";
                echo "<h2><i>Rol: </i>" . $datosCookie["rol"] . "</h2>";
            }
        ?>
        <br/>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <button class="btn btn-primary" name ="salir">Salir</button>
        </form>

    </div>
</body>
</html>