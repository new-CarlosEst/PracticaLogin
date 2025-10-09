<?php

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
        <form>
            <h2>Bienvenido</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <button class="btn btn-link">Compra</button>
                <button class="btn btn-link">Venta</button>
                <br/>
                <button class="btn btn-primary btn-lg">Cerrar Sesion</button>
            </form>
        </form>
    </div>
</body>
</html>