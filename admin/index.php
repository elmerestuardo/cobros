<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ePanel</title>
        <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <form method="post" action="../prestamos/DAL/login.php">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0">
                    <div class="col-md-12 col-xs-12">
                        <p>Por favor ingrese sus datos para iniciar sesion</p>
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <label class="control-label">Usuario:</label>
                        <input type="text" name="usuario" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-xs-12">
                        <label class="control-label">Contraseña:</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
                        <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                    </div>
                </div>
                <!--<button type="button" id="btnPrueba" class="btn btn-danger">Hola a todos</button>-->
            </div>
                </form>            
        </div>
        <script src="Scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
    </body>   
</html>