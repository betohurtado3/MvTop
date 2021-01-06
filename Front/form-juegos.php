<html>
    <head>

    <link rel="stylesheet" href="../css/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
                            <a class="nav-link mx-3" aria-current="page" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-3" href="juegos.php">Juegos</a>
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
    <?php
        }
        else{
             header('Location: ../index.php'); 
            }
        ?>   
        <br>
        <div class="mx-auto" style="max-width: 300px;">
            <div class="row g-0">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Titulo">
                    <label for="exampleFormControlInput1" class="form-label">Juego</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Juego">
                    <label for="exampleFormControlInput1" class="form-label">Descripción</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <br>
                    <label for="exampleFormControlTextarea1" class="form-label">Autor:</label>
                    <input class="form-control" type="text" placeholder="<?php
                            if (isset($_SESSION['user'])) 
                            {                               
                                echo "".$_SESSION['user'];
                            }
                            ?>" aria-label="Disabled input example" disabled>
               </div>
               <a class="btn btn-outline-success btn-lg" href="form-juegos.php">Crear Nota</a>
               <br>
               <a class="btn btn-outline-danger btn-lg" href="form-juegos.php">Regresar</a>
            </div>
        </div>

    </body>
</html>