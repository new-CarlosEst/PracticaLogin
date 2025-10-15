<?php 
    //Aqui tengo una funcion que mira en que pagina debes de estar y si no estas ahi te redirije segun la sesion en la que estoy
    function redigirPagina (){
        //Saco la sesion para ver en que pagina deberia estar
        $nPag = $_SESSION["flujo"];

        switch ($nPag){
            case 1:
                header("location: login.php");
                break;
            case 2:
                header("location: welcome.php");
                break;
            case 3:
                header("location: venta.php");
                break;
            case 4:
                header("location: compra.php");
                break;
            default:
                //No hace nada, ya que no es una pagina valida
                break;
        }
    }
?>