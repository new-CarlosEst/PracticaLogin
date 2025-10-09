<?php
    //Si el metodo es de post
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //Detecto si ha tocado el boton de compras
        $direccionar = "";
        if (isset($_POST["compra"])){
            //pongo la direccion a compra.php
            $direccionar = "compra.php";
        }
        else if (isset($_POST["venta"])){
            //pongo la direccion a venta.php
            $direccionar = "venta.php";
        }
        else if (isset($_POST["cerrarSesion"])){
            //Pongo la dirrecion al login
            $direccionar = "login.php";
            //borro la cookie
            setcookie("datos_usuario", "", time()-3600);
        }
        header("location : " . $direccionar);
        exit;

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