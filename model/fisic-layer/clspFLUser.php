<?php
require_once (dirname(dirname(__FILE__)) . "/fisic-layer/clspFLUserType.php");
require_once (dirname(dirname(__FILE__)) . "/fisic-layer/clspFLUserStatus.php");

class clspFLUser
 {
	public $idUser;
	public $userType;
	public $userStatus;
	public $firstName;
	public $lastName;
	public $name;
	protected $password;
	
	public function __construct()
	 {
		$this->idUser="";
		$this->userType=new clspFLUserType();
		$this->userStatus=new clspFLUserStatus();
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
		unset($this->idUser, $this->userType, $this->userStatus, $this->firstName, $this->lastName, $this->name, $this->password);
	 }
 }
?>