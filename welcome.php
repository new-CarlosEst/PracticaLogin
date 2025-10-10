<?php
    //Si la cookie no esta, te devuelve a login
    if (!isset($_COOKIE["datos_usuario"])){
        header("location: login.php");
    }
    else{
        //Si el metodo es de post
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //Detecto si ha tocado el boton de compras
            
            if (isset($_POST["compra"])){
                header("location: compra.php");
                exit; //Exit lo que hace es para que la pagina se muera
            }
            else if (isset($_POST["venta"])){
                header("location: venta.php");
                exit;
            }
            else if (isset($_POST["cerrarSesion"])){
                //borro la cookie
                setcookie("datos_usuario", "", time()-3600);

                //Voy a login otra vez
                header("location: login.php");
                exit;
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
    <link rel="stylesheet" href="css/welcome.css">
    <title>Bienvenida</title>
</head>
<body>
    <div class="wrapper">
        <h2>Bienvenido</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <button class="btn btn-link" name="compra">Compra</button>
            <button class="btn btn-link" name="venta">Venta</button>
            <br/>
            <button class="btn btn-primary btn-lg" name="cerrarSesion">Cerrar Sesion</button>
        </form>
    </div>
</body>
</html>