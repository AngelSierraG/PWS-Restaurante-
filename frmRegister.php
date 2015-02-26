<?php
/********************************************************
Name: frmRegister.php
Autor name: Hilsier
Modification autor name: 
Creation date: 30/01/2015
Modification date:
Description: this is a contacts form to restautant project, Incorporate: Name, Phone, e-Mail and Messaje of user to admin.   
********************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="view/css/grid.css">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/contacts.css"/>
    <script src="view/js/jquery.js"></script>
    <script src="view/js/jquery-migrate-1.2.1.js"></script>
    <script src="view/js/modal.js"></script>
    <script src="view/js/TMForm.js"></script>
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
                    <image src="images/logoSazon.png">
                </a>
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
                            <a data-hover="Menu" href="frmMenu.php">Menú</a>
                        </li>
                        <li>
                            <a data-hover="Gallery" href="frmGallery.php">Gallería</a>
                        </li>
                        <li class="current">
                            <a data-hover="Contacts" href="frmContacts.php">Contacto</a>
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
                            <h2 class="hdng__off3">Regístrate <span></span></h2>

                            <form id="frmContacts">
                                <div class="frmContacts-loader"></div>
                                <fieldset>
                                    <div class="row">
                                        <div class="grid_4">
                                            <label class="name">
                                                <input type="text" name="name" placeholder="Nombre:" value=""
                                                       data-constraints="@Required @JustLetters"/>
                                                <span class="empty-message">*Este campo es obligatorio.</span>
                                                <span class="error-message">*Este no es un nombre válido</span>
                                            </label>
                                        </div>
                                        <div class="grid_4">
                                            <label class="email">
                                                <input type="text" name="email" placeholder="E-mail:" value=""
                                                       data-constraints="@Required @Email"/>
                                                <span class="empty-message">*Este no es un nombre válido.</span>
                                                <span class="error-message">*Este no es un nombre válido.</span>
                                            </label>
                                        </div>

                                        <div class="grid_4">
                                            <label class="phone">
                                                <input type="text" name="phone" placeholder="Teléfono:" value=""
                                                       data-constraints="@JustNumbers"/>
                                                <span class="empty-message">*Este campo es obligatorio.</span>
                                                <span class="error-message">*Este no es un nombre válido.</span>
                                            </label>
                                        </div>
                                            <div class="grid_4">
                                            <label class="Cumpleaños">
                                                <input type="text" name="txtCumpleaños" placeholder="Nacimiento A-M-D " value=""
                                                       data-constraints="@Required @Email"/>
                                                <span class="empty-message">*Este no es un nombre válido.</span>
                                                <span class="error-message">*Este no es un nombre válido.</span>
                                            </label>
                                        </div>
                                         <div class="grid_4">
                                            <label class="Password">
                                                <input type="text" name="Contraseña" placeholder="Contraseña" value=""
                                                       data-constraints="@Required @Email"/>
                                                <span class="empty-message">*Este no es un nombre válido.</span>
                                                <span class="error-message">*Este no es un nombre válido.</span>
                                            </label>
                                        </div>


                                    </div>
                                     <div class="btn-wr">
                                        <a class="btn1" href="#" data-type="submit">Registro</a>
                                    </div>
                                </fieldset>
                                <div class="modal fade response-message">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button>
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
                            <address class="addr ta__c">
                                <p>DIRECCIÓN: 1A AV. NTE. ENTRE 3A Y 4A OTE. BARRIO NORTE.</p>

                                <p>
                                    Teléfono: 919-1187819 <br/>
                                    E-mail:
                                    <a href="mailto:#">elsazondelupita@gmail.com</a>
                                    <br/>
                                    Ocosingo, 
                                    <a href="#">Chiapas.</a>
                                </p>
                            </address>


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