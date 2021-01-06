<html>
    <head>

    <link rel="stylesheet" href="../css/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>

    <body>
    <!--Iniciar sesion-->
    <?php
        require("../Back/login.php");
        if($estado)
        {   
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand mx-5" href="inicio.php">MVTOP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active mx-3" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="juegos.php">Juegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-3" href="peliculas.php">Peliculas</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav navbar-right">
                        <li class="nav-item-end navbar-right">
                            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">
                                <?php
                                    if (isset($_SESSION['user'])) 
                                    {                               
                                        echo "".$_SESSION['user'];
                                    }
                                ?> 
                            </a>
                        </li>
                        <li class="nav-item navbar-right">
                            <a class="nav-link mx-5"  href="../Back/cerrarsesion.php">Salir</a>
                        </li>
                    </ul>

        </nav>
    <br>
           

            
    <?php
        }
        else{
             header('Location: ../index.php'); 
            }
        ?>


    <?php
        require "../Back/conexion.php";
        $sql="SELECT * From Noticias Where eliminado = 0";
        $res = mysqli_query($con, $sql);
        $num = mysqli_num_rows($res); ///Numero de registros
         for($i = $num; $objeto = $res->fetch_object();$i++)
        {
    ?>
        <div class="card border-dark mx-auto" style="max-width: 18rem;">
            <div class="card-header"><?= $objeto->Titulo?></div>
                <div class="card-body">
                <p class="card-text"><?=$objeto->Contenido?></p>
            </div>
        </div>
        <br>
        <?php
        }
        ?>
    
    </body>
</html>