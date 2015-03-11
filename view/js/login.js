/********************************************************
Name: login
Autor name: Edwuard H. Cabrera Rodríguez
Modification autor name: Edwuard H. Cabrera Rodríguez
Creation date:  25/09/2014
Modification date: 28/09/2014
Description: JS file. It provides support between frmlogin (view) and login (controller) files, in order to login a user into Web Page (Quiero Comer Ya)
********************************************************/

var vwndwPasswordRecovery; //Object variable in order to reference the window password recovery
var vcmdPasswordRecovery; //Object variable in order to reference the button password recovery

function _default() //It loads the default parameters of the Web Page.
 {
	//Display the menu of the web page, establishing the current web page as active
	menu(1);
 }

function login() //It logins a user into Web Page.
 {
	if ( validateLoginFormFields() ){ //Are all the login form fields valid?
		//Login a user into Web Page
		xajax_login(xajax.getFormValues("vlogin"));
	}
	else{
		//Show a message to user
		alert("El logeo no puede ser realizado, no tiene los datos necesarios, complete los datos");
	}
 }
 
function passwordRecovery() //It recovers a password user into specified email by user.
 {
	if ( validatePasswordRecoveryFormFields() ){ //Are all the password recovery form fields valid?
		//Recover a password user into specified email by user
		xajax_passwordRecovery(Trim(xajax.$("txtemail").value));
	}
	else{
		//Show a message to user
		alert("La recuperación de la contraseña no puede ser realizada, no tiene los datos necesarios, complete los datos");
	}
 }
 
function openPasswordRecoveryWindow() //It opens a password recovery windows.
 {
	//Set reference to password recovery window
	vwndwPasswordRecovery = $("#vwndwPasswordRecovery"), 
	//Set the event: clic, to password recovery button
	vcmdPasswordRecovery = $("#vpasswordRecovery").bind("click", function(){
		//Open password recovery window
		vwndwPasswordRecovery.data("kendoWindow").open();
		//Hide password recovery button
		vcmdPasswordRecovery.hide();
	});

	if ( !vwndwPasswordRecovery.data("kendoWindow") ){ //Is not password recovery window created?
		//Set password recovery window paramenters
		vwndwPasswordRecovery.kendoWindow({
			width: "30%",
			title: "Recuperar Contraseña.",
			resizable:false,
			close: closePasswordRecoveryWindow
		});
		//Hide password recovery button
		vcmdPasswordRecovery.hide();
		//Center the password recovery window
		vwndwPasswordRecovery.data("kendoWindow").center();
		//Set password recovery controls to password recovery window
		xajax.$("vpasswordRecoveryData").innerHTML=getPasswordRecoveryControls();
	 }
 }
 
function closePasswordRecoveryWindow() //It closes a password recovery windows.
 {
	 //Display the pasdword recovery button
	 vcmdPasswordRecovery.show();
 }
 
function getPasswordRecoveryControls() //It gets the password recovery controls.
 {
	//Set password recovery controls
	var vhtml="";
	vhtml ='<form name="vpasswordRecovery" id="vpasswordRecovery" method="post" onsubmit="return false;">';
	vhtml+='<table>';
	vhtml+='	<tr>';
	vhtml+='		<td>&nbsp;</td>';
	vhtml+='	</tr>';
	vhtml+='	<tr>';
	vhtml+='		<td class="textCaptionLogin-1"><p>Para recuperar su contraseña, es necesario que proporcione lo siguiente:</p></td>';
	vhtml+='	</tr>';
	vhtml+='	<tr>';
	vhtml+='		<td>';
	vhtml+='		<table>';
	vhtml+='			<tr>';
	vhtml+='				<td style="width:10%;">&nbsp;</td>';
	vhtml+='				<td style="width:80%;">';
	vhtml+='				<input type="text" id="txtemail" name="txtemail" maxlength="50" style="width:93%;" placeholder="Correo Electrónico" class="form-control" />';
	vhtml+='				</td>';
	vhtml+='				<td style="width:10%;">&nbsp;</td>';
	vhtml+='				</tr>';
	vhtml+='		</table>';
	vhtml+='		</td>';
	vhtml+='	</tr>';
	vhtml+='	<tr>';
	vhtml+='		<td>&nbsp;</td>';
	vhtml+='	</tr>';
	vhtml+='	<tr>';
	vhtml+='		<td>';
	vhtml+='		<table>';
	vhtml+='			<tr>';
	vhtml+='				<td style="width:10%;">&nbsp;</td>';
	vhtml+='				<td style="width:80%;"><button type="button" style="width:93%" class="btn btn-primary btn-large" onClick="passwordRecovery();">Aceptar</button>';
	vhtml+='				</td>';
	vhtml+='				<td style="width:10%;">&nbsp;</td>';
	vhtml+='			</tr>';
	vhtml+='		</table>';
	vhtml+='		</td>';
	vhtml+='	</tr>';
	vhtml+='	<tr>';
	vhtml+='		<td>&nbsp;</td>';
	vhtml+='	</tr>';
	vhtml+='</table>';
	vhtml+='</form>';
	
	//Return password recovery controls
	return  vhtml;
 }

function validateLoginFormFields() //It validates a login form fields.
 {
	//Set validation as true
	var vstatus=true; 
	
	if ( Trim(xajax.$("txtuser").value) == "" ){ //Is not user id (email) valid?
		//Set focus to user id
		xajax.$("txtuser").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( ! isEmail(Trim(xajax.$("txtuser").value)) ){ //Is not user id(email) valid format?
		//Show a message to user
		alert("El correo electrónico debe tener un formato válido");
		//Set focus to user id
		xajax.$("txtuser").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( Trim(xajax.$("txtpassword").value) == "" ){ //Not, is not user password valid?
		//Set focus to user password
		xajax.$("txtpassword").focus();
		//Set validation as false
		vstatus=false;
	}
	
	//Return validation
	return vstatus;
 }
 
function validatePasswordRecoveryFormFields() //It validates a password recovery form fields.
 {
	//Set validation as true
	vstatus=true;
	
	if ( Trim(xajax.$("txtemail").value) == "" ){ //Is not email recovery valid?
		//Set focus to email recovery
		xajax.$("txtemail").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( ! isEmail(Trim(xajax.$("txtemail").value)) ){ //Is not email recovery valid format?
		//Show a message to user.
		alert("El correo electrónico, para recuperar la contraseña, debe tener un formato válido");
		//Set focus to email recovery
		xajax.$("txtemail").focus();
		//Set validation as false
		vstatus=false;
	}
	
	//Return validation
	return vstatus;
 }