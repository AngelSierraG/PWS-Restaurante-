<?php
/********************************************************
Name: frmContacts.php
Autor name: Ángel Sierra
Modification autor name: 
Creation date: 30/01/2015
Modification date:
Description: this is a contacts form to restautant project, Incorporate: Name, Phone, e-Mail and Messaje of user to admin.   
********************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>
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

    <!--[if lt IE 9]>
    <div id="ie6-alert" style="width: 100%; text-align:center; background: #232323;">
        <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0"
             usemap="#Map" longdesc="http://die6.frontcube.com"/>
        <map name="Map" id="Map">
            <area shape="rect" coords="496,201,604,329"
                  href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
                  alt="Download Interent Explorer"/>
            <area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank"
                  alt="Download Apple Safari"/>
            <area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank"
                  alt="Download Opera"/>
            <area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank"
                  alt="Download Firefox"/>
            <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank"
                  alt="Download Google Chrome"/>
        </map>
    </div>

    <script src="view/js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="view/css/ie.css">
    <![endif]-->
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
                            <a data-hover="Home" href="index.html">Inicio</a>
                        </li>
                        <li>
                            <a data-hover="About" href="index-1.html">Nosotros</a>
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
            <div class="stellar-block stellar12">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h2 class="hdng__off3">Nuestro <span>Contacto </span></h2>

                            <div id="map" class="map">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1908.6540694941157!2d-92.0917855!3d16.910085800000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x9b30939d785d33d7!2sEl+Saz%C3%B3n+de+Lupita!5e0!3m2!1ses!2smx!4v1420879849340" width="100%" height="100%" frameborder="0" style="border:0"></iframe>

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

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="stellar-section">
            <div class="stellar-block stellar13">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h2 class="hdng__off3">Escríbenos <span></span></h2>

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
                                            <label class="phone">
                                                <input type="text" name="phone" placeholder="Teléfono:" value=""
                                                       data-constraints="@JustNumbers"/>
                                                <span class="empty-message">*Este campo es obligatorio.</span>
                                                <span class="error-message">*Este no es un nombre válido.</span>
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
                                    </div>

                                    <label class="message">
                                        <textarea name="message" placeholder="Mensaje:"
                                                  data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                        <span class="empty-message">*Este no es un nombre válido.</span>
                                        <span class="error-message">*El mensaje es muy corto.</span>
                                    </label>

                                    <div class="btn-wr">
                                        <a class="btn1" href="#" data-type="submit">Enviar</a>
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