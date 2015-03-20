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


function login() //It logins a user into Web Page.
 {
	txtUser = document.getElementById("txtEmail").value;
	txtPassword = document.getElementById("txtPassword").value;
	sendMessagetoController(txtUser, txtPassword);
 }
 
function passwordRecovery() //It recovers a password user into specified email by user.
 {
	
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
	
	if ( Trim(xajax.$("txtEmail").value) == "" ){ //Is not user id (email) valid?
		//Set focus to user id
		xajax.$("txtEmail").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( ! isEmail(Trim(xajax.$("txtuser").value)) ){ //Is not user id(email) valid format?
		//Show a message to user
		alert("El correo electrónico debe tener un formato válido");
		//Set focus to user id
		xajax.$("txtEmail").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( Trim(xajax.$("txtPassword").value) == "" ){ //Not, is not user password valid?
		//Set focus to user password
		xajax.$("txtPassword").focus();
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
	
	if ( Trim(xajax.$("txtEmail").value) == "" ){ //Is not email recovery valid?
		//Set focus to email recovery
		xajax.$("txtEmail").focus();
		//Set validation as false
		vstatus=false;
	}
	else if ( ! isEmail(Trim(xajax.$("txtEmail").value)) ){ //Is not email recovery valid format?
		//Show a message to user.
		alert("El correo electrónico, para recuperar la contraseña, debe tener un formato válido");
		//Set focus to email recovery
		xajax.$("txtEmail").focus();
		//Set validation as false
		vstatus=false;
	}
	
	//Return validation
	return vstatus;
 	}
 
 	function sendMessagetoController()
	{
		 var httpAjax;
                if (window.XMLHttpRequest){
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    httpAjax=new XMLHttpRequest();
                }else{
                    // code for IE6, IE5
                    httpAjax=new ActiveXObject("Microsoft.XMLHTTP");
                }
                httpAjax.onreadystatechange=function(){
                    if (httpAjax.readyState==4 && httpAjax.status==200){
                        document.getElementById("room").innerHTML=httpAjax.responseText;
                    }
                }
                //send a request to a server
                //var valor;
                
                httpAjax.open("GET","messageClient.jsp?user="+user+"&room="+room+"&message="+message+"&action=1",false);
                httpAjax.send();  
	}
 	