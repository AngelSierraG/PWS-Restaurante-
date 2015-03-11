<?php
$vxajax_core = dirname(dirname(__FILE__)) . "/tools/xajax_0.5_standard/xajax_core";
require_once($vxajax_core . "/xajax.inc.php");

$vxajax = new xajax();
$vxajax->configure("javascript URI", "tools/xajax_0.5_standard");
$vxajax->setCharEncoding('UTF-8');

require_once (dirname(dirname(__FILE__)) . "/model/fisic-layer/clspFLUser.php");
require_once (dirname(dirname(__FILE__)) . "/model/business-layer/clspBLUser.php");


function login($vloginForm)
 {
	$vresponse= new xajaxResponse();
	
	try{
		$vflUser= new clspFLUser();
		$vflUser->idUser=trim($vloginForm["txtuser"]);
		switch(clspBLUser::verifyPasswordToDataBase($vflUser, $vloginForm["txtpassword"])){
			case -1: $vresponse->alert("Imposible logearse en el sistema. " . chr(13) .
									   "Su acceso se encuentra inactivo, póngase en contacto con el administrador del sistema");
					 break;
			case 0:  $vresponse->alert("Imposible logearse en el sistema. " . chr(13) .
									   "No existen usuarios registrados con el nombre y/o contraseña proporcionado");
					 break;
			case 1:  //session_start();
					 $_SESSION['idUser']=$vflUser->idUser;
					 clspBLUser::queryToDataBase($vflUser);
					 clspBLUser::activeInDataBase($vflUser);
					 
                     $vresponse->alert("logeado");
					 /*if ( $vflUser->userType->idUserType==1 ){
					 	$vresponse->redirect("./frmusuarios.php");
					 }
					 else if( $vflUser->userType->idUserType==2 ){
					 	$vresponse->redirect("./frmmy-profile.php");
					 }*/
		}
		
		unset($vloginForm, $vflUser);
	}
	catch (Exception $vexception){
		$vresponse->alert("Ocurrió un error al tratar de logearse, intente de nuevo");
	}
	
	return $vresponse;
 }

function recoveryPassword($vidUser)
 {
	$vresponse= new xajaxResponse();
	
	try{
		$vflUser= new clspFLUser();
		$vflUser->idUser=$vidUser;
		switch(clspBLUser::recoveryPasswordToEmail($vflUser)){
			case -2: $vresponse->alert("Imposible recuperar la contraseña al correo electrónico especificado."  . chr(13) .
									   "El correo electrónico no se encuentra registrado.");
					 break;
			case -1: $vresponse->alert("Imposible recuperar la contraseña al correo electrónico especificado."  . chr(13) .
									   "No se realizó ninguna modificación de la contraseña, intente de nuevo.");
					 break;
			case 0: $vresponse->alert("Imposible recuperar la contraseña al correo electrónico especificado."  . chr(13) .
									  "No se envío la contraseña al correo electrónico especificado, intente de nuevo.");
					 break;
			case 1:  $vresponse->alert("La contraseña se ha recuperado correctamente, verifique el correo");
					 $vresponse->script("vwndwRecoveryPassword.data('kendoWindow').close();");
					 break;
		}
		unset($vidUser, $vflUser);
	}
	catch (Exception $vexception){
		$vresponse->alert("Ocurrió un error al tratar de recuperar la contraseña al correo electrónico especificado, intente de nuevo");
	}
	
	return $vresponse;
 }

$vxajax->register(XAJAX_FUNCTION,"login");
$vxajax->register(XAJAX_FUNCTION,"recoveryPassword");
$vxajax->processRequest();
?>