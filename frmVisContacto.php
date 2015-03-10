<?php
/* * ******************************************************
  Name: frmVisContacto.php
  Autor name: Ángel Odilón Sierra Gonz�lez
  Modification autor name:
  Creation date: 30/01/2015
  Modification date:
  Description: this is a contacts form to restautant project, Incorporate: Name, Phone, e-Mail and Messaje of user to admin.
 * ****************************************************** */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacto</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="view/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="view/css/grid.css">
        <link rel="stylesheet" href="view/css/styles.css">
        <link rel="stylesheet" href="view/css/VisContacto.css"/>
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
                                    <image src="view/images/logoSazon.png">
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
                                    <a data-hover="Menu" href="index-2.html">Men�</a>
                                </li>
                                <li>
                                    <a data-hover="Gallery" href="index-3.html">Galler�a</a>
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
                                    <h2 class="hdng__off3">Nuestra <span>Ubicaci�n </span></h2>

                                    <div id="map" class="map">

                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1908.6540694941157!2d-92.0917855!3d16.910085800000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x9b30939d785d33d7!2sEl+Saz%C3%B3n+de+Lupita!5e0!3m2!1ses!2smx!4v1420879849340" width="100%" height="100%" frameborder="0" style="border:0"></iframe>

                                    </div>

                                    <address class="addr ta__c">
                                        <p>DIRECCI�N: 1A AV. NTE. ENTRE 3A Y 4A OTE. BARRIO NORTE.</p>

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
                                    <h2 class="hdng__off3">Cont�ctanos <span></span></h2>

                                    <form id="frmContacts">
                                        <div class="frmContacts-loader"></div>
                                        <fieldset>
                                            <div class="row">
                                                <div class="grid_4">
                                                    <label class="name">
                                                        <input type="text" name="txtName" id="txtName" placeholder="Nombre:" value=""
                                                               data-constraints="@Required @JustLetters"/>
                                                        <span class="empty-message">*Este campo es obligatorio.</span>
                                                        <span class="error-message">*Este no es un nombre válido</span>
                                                    </label>
                                                </div>

                                                <div class="grid_4">
                                                    <label class="phone">
                                                        <input type="text" name="txtPhone" id="txtPhone" placeholder="Teléfono:" value=""
                                                               data-constraints="@JustNumbers"/>
                                                        <span class="empty-message">*Este campo es obligatorio.</span>
                                                        <span class="error-message">*Este no es un nombre válido.</span>
                                                    </label>
                                                </div>

                                                <div class="grid_4">
                                                    <label class="email">
                                                        <input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail:" value=""
                                                               data-constraints="@Required @Email"/>
                                                        <span class="empty-message">*Este no es un nombre válido.</span>
                                                        <span class="error-message">*Este no es un nombre válido.</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <label class="message">
                                                <textarea name="txtMessage" id="txtMessage" placeholder="Mensaje:"
                                                          data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                                <span class="empty-message">*Este no es un nombre válido.</span>
                                                <span class="error-message">*El mensaje es muy corto.</span>
                                            </label>

                                            <div class="btn-wr">
                                                <a class="btn1" name="btnSubmitContacto" id="btnSubmitContacto" href="#" data-type="submit">Enviar</a>
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
                                        <a href="index-5.html">Pol�ticas de Privacidad</a>
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