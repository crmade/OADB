<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="imagenes/favicon.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <link href="css/open-iconic-bootstrap.css" rel="stylesheet">
        <title> Open Asset DataBase</title>
    </head>
    <body>
        <div id="container">
            <?php
            include_once "dbServers.php";
            //connectDB();
            print("hola");
            showServers();
            ?>  
        <!--
                <img style="max-width:60%; margin-left: 50px;"  src="./imagenes/logoFINAL.png">
            <div>
                <form id="formLogin" class="form-horizontal" role="form">
                    <div class="form-group">
                      <div>
                        <input type="form-control" class="form-control" id="username" placeholder="Usuario">
                      </div>
                    </div>
                    <div class="form-group">
                      <div >
                        <input type="password" class="form-control" id="userPass" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="validarUsuario()">Ingresar</button>
                    </div>
                </form>
                <div id="alertaValidarUsuario" class="alert alert-danger">Usuario o clave incorresta</div>
            </div>
            -->
        </div>

    </body>
</html>