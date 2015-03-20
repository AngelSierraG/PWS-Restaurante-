<?php
/* * ******************************************************
  Name: frmLogindeUsuarios.php
  Autor name: Ángel Odilón Sierra González
  Modification autor name:
  Creation date: 30/01/2015
  Modification date:
  Description: this page is a login form to PWS-Restaurante Project
 * ****************************************************** */
	require_once("controller/login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login de Usuarios</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="view/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="view/css/grid.css">
        <link rel="stylesheet" href="view/css/style.css">
        <link rel="stylesheet" href="view/css/LogUsuarios.css"/>
        <script src="view/js/jquery.js"></script>
        <script src="view/js/jquery-migrate-1.2.1.js"></script>
        <script src="view/js/modal.js"></script>
        <script src="view/js/TMForm.js"></script>
        <script type="text/javascript" src="view/js/login.js"></script>
        <script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
    
 
    </head>

    <body>
        <div class="page">
            <!--This is HEADER area -->
            <header id="header">
                <div class="bg-image1">
                    <div id="stuck_container">
                        <div class="substrate"></div>
                        <div class="brand flt__l flt__n-sm">
                            <h1>
                                <a href="index.html">
                                    <image src="view/images/logoSazon.png">
                                </a>
                            </h1>
                        </div>

                        <nav class="nav flt__r flt__n-sm">
                            <ul class="sf-menu">
                                <li>
                                    <a data-hover="Home" href="frmIndex.php">Inicio</a>
                                </li>
                                <li>
                                    <a data-hover="About" href="frmAbout.php">Nosotros</a>
                                    <ul>
                                        <li>
                                            <a href="#">Historia</a>
                                        </li>
                                        <li>
                                            <a href="#">Nuestro Equipo de Trabajo</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Equipo</a>
                                                </li>
                                                <li>
                                                    <a href="#">Calidad</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-hover="Menu" href="index-2.html">Menú</a>
                                </li>
                                <li>
                                    <a data-hover="Gallery" href="index-3.html">Gallería</a>
                                </li>
                                <li class="current">
                                    <a data-hover="Contacts" href="index-4.html">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <!--This is CONTENT area-->

            <section id="content">
                <div class="stellar-section">
                    <div class="stellar-block stellar13">
                        <div class="container">
                            <div class="row">
                                <div class="grid_12">
                                    <h2 class="hdng__off3">Login<span></span></h2>
                                    <form id="frmLogin">
                                        <div class="frmLogin-loader"></div>
                                        <fieldset>                            
                                            <div class="row"><div class="grid_4"> </div>
                                                <div class="grid_4">
                                                    <label class="email">
                                                        <input type="text" name="txtEmail" id="textEmail" placeholder="E-mail:" value=""
                                                               data-constraints="@Required @Email"/>
                                                        <span class="empty-message">*Este no es un nombre válido.</span>
                                                        <span class="error-message">*Este no es un nombre válido.</span>
                                                    </label>                                     
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="grid_4"> </div>
                                                <div class="grid_4">
                                                    <label class="name">
                                                        <input type="password" name="txtPassword" id="txtPassword" placeholder="Password:" value="" data-constraints="@Required @JustLetters"/>
                                                        <span class="empty-message">*Este campo es obligatorio.</span>
                                                        <span class="error-message">*Este no es un nombre válido</span>
                                                    </label>
                                                </div>

                                            </div>


                                            <div class="row">

                                                <div class="btn-wr">
                                                    <a class="btn1"  name="btnLogin" id="btnLogin" onClick="login()" data-type="submit">Login</a>  <a class="btn1"  name="btnRegister" id="btnRegister" href="#" data-type="submit">Registro</a>  <a class="btn1"  name="btnRenew" id="btnRenew" >Renovar Contraseña</a>
                                                </div>
                                            </div> 

                                        </fieldset>
                                        <div class="modal fade response-message">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true" >&times;</button>
                                                        <h4 class="modal-title">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        You message has been sent! We will be in touch soon.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--This is FOOTER area-->

            <footer id="footer">
                <div class="stellar-section">
                    <div class="stellar-block stellar-f">
                        <div class="container">
                            <div class="row">
                                <div class="grid_12">

                                    <ul class="socials">
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="info">
                                        <a href="./">Restaurante</a>
                                        ©
                                        <span id="copyright-year"></span>
                                        .
                                        <a href="index-5.html">Políticas de Privacidad</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="view/js/script.js"></script>
    </body>

</html>