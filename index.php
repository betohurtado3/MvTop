<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <!-- CSS only -->
        <!--Exportacion de librerias de bootrap, jQuery y ajax-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
        <script>
        function recibe() {
            var mail = document.forma1.correo.value;
            var contra = document.forma1.pass.value;
            if (mail == "" || contra == "")
                {
                    alert("Datos Incompletos")
                    return false;
                }

            else
                return true;
        }

        $(document).ready(function() {
            $("#boton").on('click', function() {
                if (recibe()) {
                    var form = $('#forma1')[0];
                    var data = new FormData(form);

                    $.ajax({
                        url: 'Back/validacion.php',
                        type: 'POST',
                        dataType: 'text',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(res) {
                            if (res == 0) 
                            {
                                alert('No existe el registro');
                            } 
                            else 
                            { 
                                location.href="Front/inicio.php";   
                            }
                        }
                            });
                        }
                    });
                });
            </script>


    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MVTOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

        <?php
            require("Back/login.php");  ///se busca que haya una sesion inciada
            if($estado){
                header('Location: Front/inicio.php');  ///Si hay una sesion se manda a inicio
            }else{
        ?>
        <br>
        <center>
        <div class="form-login mx-auto">
            <div class="mx-auto">
                <h3 class="">Iniciar <strong>Sesión</strong></h3>
                <div class="card-body">
                    <form id="forma1" name="forma1" action="" method="POST">
                        <p class="titulos">Nickname:<br>
                        <input class="form-control"type="text" placeholder="Ingresa Nickname..." name="correo"></p>
                        <p class="titulos">Password: <br>
                        <input class="form-control" type="password" placeholder="Ingrese contraseña..." name="pass"></p>
                        <input onclick="recibe()"  id="boton" class="btn" type="button" value="Iniciar Sesión">
                        <br>
                        <button type="button" id="olvide" class="btn btn-link">Olvide mi contraseña</button>
                        <hr>
                        <input id="botoncrear" class="btn" type="button" href="Front/registro.php" value="Crear cuenta">
                    </form>
                </div>
            </div>
        </div>
        </center>
        <?php                        
            }
        ?>
        </body>
</html>