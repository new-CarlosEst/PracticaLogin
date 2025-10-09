<?php
    include_once "Usuario.php";
    function comprobarCredenciales($user, $password){
        //Me creo 2 objeto usuarios y los meto a un array
        $user1 = new Usuario("usuarioCompras", "compras123", "Compras");
        $user2 = new Usuario("usuarioVentas", "ventas123" , "Ventas");
        $user3 = new Usuario("admin", "admin2025", "Administrador");

        $usuarios = [$user1, $user2];

        for ($i = 0; $i< count($usuarios) ; $i++){
            //Si el usuario pasado por parametro y la contraseña coinciden con los de uno de los usuarios del array devuelve true y al usuario
            if ($usuarios[$i]->__getNombre() == $user && $usuarios[$i]->__getPassword() == $password){
                return [true, $usuarios[$i]];
            }
        }
        //y si no encuentra el usuario devuelve falso
        return false;
    }
    //Si el metodo es post
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //Si ha pasado usuario y contraseña

        if (isset($_POST["usuario"]) && isset($_POST["password"])){
            //Si esta el user correcto meto el rol en una cookie y entro a la pestaña de welcome
            $user = $_POST["usuario"];
            $pass = $_POST["password"];
            $credenciales = comprobarCredenciales($user, $pass);

            //Si devuelve false la funcion
            if (!$credenciales){
                //Salta la alerta
                echo '<script src="js/alerta.js"></script>';
;
            }
            else {
                //Creo la cookie y le meto el rol y pongo que expire en 1 hora
                setcookie("Rol", $credenciales[1]->__getRol() , time() + 3600);
                
                //Redirijo a la pagina de welcome 
                header("Location: welcome.php?user=$user&password=$pass");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulario Login</title>
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> 

            <h2 class="form-signin-heading">Inicio de sesion</h2>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>    
            
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>   
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>