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
                <a class="navbar-brand" href="inicio.php">MVTOP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="juegos.php">Juegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="peliculas.php">Peliculas</a>
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
                    <a class="nav-link"  href="../Back/cerrarsesion.php">Salir</a>
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
        <div class="card mx-auto" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-3">
                    <img width="150" src="https://sm.ign.com/ign_latam/game/t/the-legend/the-legend-of-zelda-breath-of-the-wild_z2sc.jpg" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">The Legend Of Zelda: Breath Of The Wild</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    20 <button type="button" class="btn btn-outline-primary btn-sm">Like</button>
                    5 <button type="button" class="btn btn-outline-danger btn-sm">Dislike</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card mx-auto" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-3">
                    <img width="150" src="https://as01.epimg.net/meristation/imagenes/2019/08/20/cover/364320561566326940.jpg" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Gears Of War 5</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>