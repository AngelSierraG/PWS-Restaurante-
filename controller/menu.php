<?php
/********************************************************
Name: menu.php
Autor name: Edwuard H. Cabrera Rodríguez
Modification autor name:
Creation date: 15/02/2015
Description: PHP file. It provides support in order to show the Web Portal (PW-Sector-Restaurantes) menu.
********************************************************/

require_once (dirname(dirname(__FILE__)) . "/model/fisic-layer/clspFLUser.php");
require_once (dirname(dirname(__FILE__)) . "/model/business-layer/clspBLUser.php");

//Start web site session
session_start();

//Set web page menú
$vmenu ='<ul class="nav nav-pills pull-right">';
$vmenu_content ='<li id="vmenu-index"><a href="./">Inicio</a></li>';
if( isset($_SESSION['idUser']) ){ //is user loged into a web site session?
    $vflUser= new clspFLUser();
    $vflUser->idUser=trim($_SESSION['idUser']);
	clspBLUser::queryToDataBase($vflUser);
	switch ( $vflUser->userType->idUserType ){
		case 1:	//Set web page menu to “Administrador General” user
				$vmenu_content ='<li id="vmenu-reservations"><a href="./frmreservations.php">Reservaciones</a></li>';
				break;
		case 2:	//Set web page menu to “other” user
				break;
	}
	$vmenu_content.='<li><a href="#" onClick="xajax_exit_();">Salir</a></li>';
}
else{
	//Set default web page menu
	$vmenu_content.='<li id="vmenu-login"><a href="./frmlogin.php">Login</a></li>';	
}

//Set complete web page menu
$vmenu.=$vmenu_content;
$vmenu.='</ul>';
$vmenu.='<h3 class="text-muted">Restaurantes</h3>';

//Show complete web page menu
echo $vmenu;
?>