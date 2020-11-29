<?php
session_start();
if(isset($_SESSION['usuario'])){
if ($_SESSION['usuario']['Tipo_usuario']=="marlen_palomino") {
		header('Location:main_app/marlen_palomino/');

	if ($_SESSION['usuario']['Tipo_usuario']=="angel_mercado") {
		header('Location:main_app/angel_mercado/');

	if ($_SESSION['usuario']['Tipo_usuario']=="carlos_berrocal") {
		header('Location:main_app/carlos_berrocal/');
	}  
 
else if($_SESSION['usuario']['Tipo_usuario']=="office_track") {
header('Location:main_app/office_track/');
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title></title>
    <link rel="shortcut icon" href="./img/icono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        .btn-secondary {
            background-color: #ff7800;
            line-height: 20px;
        }

        .white {
            color: #ffffff;
        }

        .error {
            background-color: #3B3B98;
            color: #ffffff
        }

        .principal {
            margin-top: 20px;
        }

        #container {
            padding-top: 2rem;
        }

        footer {
            height: 5.5rem;
        }

        .login {
            margin-left: auto;
            margin-right: auto;
        }

        .hello span {
            font-size: 20px;
        }

        .hello {
            font-size: 20px;
        }

        .distancia {
            margin-bottom: 140px;
            margin-top: 5px;
        }

        .appWhatsapp {
            margin: 0;
            padding: 0;
            width: 50px;
            max-width: 340px;
            height: auto;
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 999;
        }

        .appWhatsapp img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <section>
        <div class="navbar-fixed" id="first">
            <nav>
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i
                                class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#particles-js"></a></li>
                            <li><a href="#about-me">Inicia Sesión</a></li>
                            <li><a href="#contact">Soporte</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="side-nav">
            <li><a href="#particles-js"></a></li>
            <li><a href="#about-me">Inicia Sesión</a></li>
            <li><a href="#contact">Soporte</a></li>
        </ul>
    </section>
    <div id="particles-js">
        <div class="text center-align">
            <h3 class="hello">Somos una empresa .</span></h3>
            <div class="distancia">
                <h5 class="hello media"><span></span></h5> <i class="material-icons heart">favorite</i>
                <span class="text-change"></span>
            </div>
        </div>
    </div>
    <section id="about-me" class="box-info section scrollspy">
        <div class="container">
            <div class="row ">
                <div class="login">
                    <h3 id="about"><span>Inicia </span> Sesión</h3>
                    <div class="principal">
                        <div class="container h-100">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="error" class="alert alert-danger" role="alert">
                                            Datos no válidos
                                        </div>
                                        <form action="" id="formlg" data-toggle="validator" role="form" method="post"
                                            action="#">
                                            <input type="hidden" class="hide" id="csrf_token" name="csrf_token"
                                                value="C8nPqbqTxzcML7Hw0jLRu41ry5b9a10a0e2bc2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Cliente</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="number" name="usuariolg" placeholder="Cliente"
                                                                required class="form-control" pattern=".{9,}"
                                                                title="Ingrese Nueve(9) caracteres" autoFocus
                                                                maxlength="9"
                                                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                                        </div>
                                                        <div class="help-block with-errors text-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Contraseña</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="number" name="passlg" placeholder="Contraseña"
                                                                required class="form-control" pattern=".{8,}"
                                                                title="Ingrese Ocho(8) caracteres" required="" autoFocus
                                                                maxlength="8"
                                                                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                                        </div>
                                                        <div class="help-block with-errors text-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" name="redirect" value="">
                                                    <input type="submit" class="btn btn-secondary btn-lg btn-block"
                                                        value="Ingresar" name="submit" class="botonlg"> <br>
                                                    <div
                                                        style="text-align:center; font-size: 80%; position: relative; top:-10px">
                                                        <a href="cambia_pass.php">¿Se te olvid&oacute; tu
                                                            contraseña?</a>
                                                            </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="contact" class="background-four section scrollspy">
        <div class="container smoo" id="container">
            <div class="row">
                <div class="col m12 col s12 center-align title-contact">
                    <h1></h1>
                </div>
            </div>
            <div class="row">
                <div class="col m12 col s12 center-align contactme">
                    <h4>Soporte</h4>
                    <h5> WhatsApp:+ </h5>
                    <a class="appWhatsapp"
                        href="https://api.whatsapp.com/send?phone=+51950700995&text=Hola%20quiero%20info">
                        <img src="./img/icon-whatsapp.png" />
                    </a>
                    <a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container center-align">
            <h6>© Copyright 2020 - Todos los derechos reservados</h6>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/lib/typed.js"></script>
    <script type="text/javascript" src="js/lib/particles.js"></script>
    <script type="text/javascript" src="js/lib/particulas.js"></script>
    <script type="text/javascript" src="js/lib/smoove.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
