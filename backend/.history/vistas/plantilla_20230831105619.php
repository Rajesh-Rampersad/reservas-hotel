<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas-Hotel | Gestion-backend </title>
    
    <link rel="icon" href="vistas/img/platilla/icono.jpg">


    <!--=====================================
	VÍNCULOS CSS
	======================================-->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Fuente Open Sans y Ubuntu -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Ubuntu" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Theme style AdminLte -->
    <link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">
  
    <!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->


    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/js/plugins/adminlte.min.js"></script>


</head>
<?php if (!isset($_SESSION["ValiarSesionBackend"]))
    
    include "paginas/login.php";

?>
<body class="hold-transition sidebar-mini sidebar-collapse">

    <div class="wrapper">

        <?php
        
            include "paginas/modulos/header.php";

            include "paginas/modulos/menu.php";
           /*=============================================
           Navegacion de Paginas
            =============================================*/

            if (isset($_GET["pagina"])) {
                if ($_GET["pagina"]== "inicio" ||
                    $_GET["pagina"]== "administradores" ||
                    $_GET["pagina"]== "banner" ||
                    $_GET["pagina"]== "planes" ||
                    $_GET["pagina"]== "categorias" ||
                    $_GET["pagina"]== "habitaciones" ||
                    $_GET["pagina"]== "reservas" ||
                    $_GET["pagina"]== "testimonios" ||
                    $_GET["pagina"]== "usuarios" ||
                    $_GET["pagina"]== "recorrido" ||
                    $_GET["pagina"]== "restaurante"){

                        include "paginas/inicio.php";
                    }

            }else{

                include "paginas/inicio.php";

            }

            include "paginas/modulos/footer.php";

        ?>
        
    </div>
    
</body>
<?php endif ?>

</html>