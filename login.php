<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Prestamos Emmanuel</title>
        <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css"> 
            footer{
                position: absolute;
  bottom: 0;
  width: 100%;
  height: 0px;
  
            }
            body{
                margin-bottom: 0px;
            }
            /*FOOTER 1*/
.footer1 a {
    color: #DDD;
}

.footer1 a:hover,
.footer1 a:focus,
.footer1 a:active {
    color: #FFF;
}

.footer1 .footer {
    background-color: #2E3436;
    padding: 35px 0;
    margin-top: 5em;
}

.footer1 .footer .footer-desc p {
    color: #DDD;
	margin: 15px 0 8px;
}

.footer1 .footer .social {
    margin: 0 auto;
    display: table;
}

.footer1 .footer .social li {
    float: left;
}

.footer1 .footer .social li a {
	display: block;
    font-size: 1em;
    color: #DDD;
    width: 30px;
    height: 30px;
    line-height: 32px;
    text-align: center;
    background-color: #222728;
    border-radius: 2px;
    margin: 15px 4px
}

.footer1 .footer .social li a:hover {
    background-color: #3A4144;
}

.footer1 .footer .input-group {
    margin: 15px 0;
}

.footer1 .footer .form-control {
    border-radius: 2px 0 0 2px;
    background-color: #585C5D;
    border-color: #585C5D;
    color: #DDD;
    font-size: 15px;
}

.footer1 .footer .form-control:hover,
.footer1 .footer .form-control:focus {
    border: 1px solid #222728;
    background-color: #222728;
}

.footer1 .footer .input-group-addon {
    border-radius: 0 2px 2px 0;
    background-color: #F7931D;
    color: #FFF;
    border-color: #F7931D;
    font-size: 15px;
}

.footer1 .footer-bottom {
    background-color: #222728;
    padding: 15px 0;
    color: #DDD;
    font-size: 13px;
}

.footer1 .footer-bottom ul li {
    display: inline-block;
}

.footer1 .footer-bottom ul li a {
    display: block;
    padding-left: 8px;
}

.footer1 .footer-bottom ul li a:after {
    content: "-";
    padding-left: 8px;
}

.footer1 .footer-bottom ul li:last-child a:after {
    content: "";
}

@media (max-width: 550px) {
	.footer1 .footer-bottom .pull-left,
	.footer1 .footer-bottom .pull-right {
		float: none !important;
		width: 100%;
		padding: 10px;
		text-align: center;
	}
}
        </style>
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
        <!--FOOTER 1-->
<footer class="footer1">
    
    
    <div class="footer-bottom">
        <div class="container">
            <div class="text-center"> Copyright © <a href="">Rizwan Akram</a>.  All right reserved.</div>
        </div>
    </div> <!--/.footer-bottom--> 
</footer>
        <script src="Scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
    </body>   
</html>