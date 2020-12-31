<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script src="js/jquery-3.3.1.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
            
        <script>
            function recibe() {
                var nick = document.formulario.correo.value;
                var pass = document.formulario.pass.value;
                if(nick == "" || pass == "")
                {
                    alert("Datos Incompletos")
                    return false;
                }
                else
                    return true;
            }

            $(document).ready(function(){
                $("#boton").on('click', function(){
                    if(recibe()){
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
                            success: function(res){
                                if (res == 0)
                                {
                                    alert("Error");
                                }
                                else
                                {
                                    location.href="Front/inicio.php";
                                }
                            }
                        })
                    }
                })
            })
        
        </script>

        </head>
    <body>
    
    <?php
        require("Back/login.php");

        if($estado){
            header('Location: Front/inicio.php');
        }else{
    ?>


    <br>
    <br>
    <div class="card border-success mx-auto" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success text-center">Iniciar Sesion</div>
            <div class="card-body text-success">
            <div class="mb-3">
                <form name="formulario" action="" method="POST">
                    <p>Dirección de Correo:<br>
                    <input type="text" name="correo"></p>
                    <p>Password: <br>
                    <input type="password" name="pass"></p>
                </form>
            </div>
            <div class="card-footer bg-transparent" style="max-width: 18rem;">
             
            <center>
                <input onclick="recibe()" id="boton" class="boton" type="button" value="Iniciar Sesión">    
                <br>
                <button type="button" class="btn btn-link">Olvidaste tu contraseña?</button>
            </center>
            </div>
        </div>
    </div>
    <center>
        No tienes cuenta?<button type="button" class="btn btn-link">Crea una</button>
    </center>

    <?php
        }
    ?>
    </body>
</html>