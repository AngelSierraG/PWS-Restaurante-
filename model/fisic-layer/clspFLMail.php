<?php

class clspFLMail
 {
	public $idMail;
	public $hostName;
	public $smtpDebug;
	public $smtpPort;
	public $smtpAuth;
	public $smtpSecure;
	public $userName;
	public $userPassword;
	public $charSet;
	public $sendingAddress;
	public $sendingUserName;
	public $receiverAddress;
	public $receiverUserName;
	public $subject;
	public $message;
	
	public function __construct()
	 {
		$this->idMail=0;
		$this->hostName="smtp.gmail.com";
		$this->smtpDebug=0;
		$this->smtpPort=587;
		$this->smtpAuth=true;
		$this->smtpSecure='tls';
		$this->userName="edwuardc@gmail.com";
		$this->userPassword="ehcrcmc";
		$this->charSet="utf-8";
		$this->sendingAddress=$this->userName;
	 }
	
	public function __get($vproperty) //Get value property
	 {
		if( isset($vproperty) ){
			throw new Exception("Property doesn't exist: $vproperty");
		}
		else{
			return $this->vproperty;
		}
	 }
	
	public function __set($vproperty, $vvalue) //Set value property
	 {
		if( isset($vproperty) ){
			throw new Exception("Property doesn't exist: $vproperty");
		}
		else{
			$this->vproperty=$vvalue;
		}
	 }
	
	
	public function __destruct()
	 {
		unset($this->idMail, $this->hostName, $this->smtpDebug, $this->smtpPort, $this->smtpAuth, $this->smtpSecure, $this->userName, $this->userPassword,
		$this->charSet, $this->sendingAddress, $this->sendingUserName, $this->receiverAddress, $this->receiverUserName, $this->subject, $this->message);
	 }
 }
?>