<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Prestamos Emmanuel</title>
        <!--<link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="materialize/css/materialize.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <form method="post" action="../prestamos/DAL/login.php">
                <div class="row">
                <div class="col s12">
                    <div class="col s4 offset-s4">
                    <div class="col s12">
                        <p>Por favor ingrese sus datos para iniciar sesion</p>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>                        
                        <input type="text" name="usuario" class="validate">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="text" name="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="col s8 offset-s2">
                        <button type="submit" class="btn waves-effect waves-light">Iniciar
                        <i class="material-icons right">send</i></button>
                    </div>
                </div>
                <!--<button type="button" id="btnPrueba" class="btn btn-danger">Hola a todos</button>-->
            </div>
                </div>
                </form>            
        </div>
        
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <script src="Scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <!--<script src="Scripts/bootstrap.min.js" type="text/javascript"></script>-->
        <script src="materialize/js/materialize.js" type="text/javascript"></script>
    </body>   
</html>