<center>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/Proyecto_Final/css/CSS.css">
    <style type="text/css"> </style>
        <title>Bienvenida</title>
    <script src="js/jquery-3.3.1.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        
        <style>
            #menu ul{margin:0;padding:0;}
            #menu ul li{display:inline;margin:0 3px;}
        </style>

    </head>
    <body>
    <br>
    <br>
    <!--Body con todo el contenido -->    
        <?php
            require("isLogin.php");
            if($estado)
            {   
            ?>
                <h1>Bien</h1>
                <?php
                            if (isset($_SESSION['user'])) {                               
                            echo "".$_SESSION['user'];
                            }
                            ?> 
                <a href="cerrar.php"><input class="boton2" type="button" value="Cerrar Sesión">
            <?php
            }
        else{
             header('Location: index.php'); 
            
            }
            ?>

    </body>
    
</html>
    </center>