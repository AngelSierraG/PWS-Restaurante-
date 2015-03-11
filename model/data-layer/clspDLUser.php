<?php
require_once (dirname(dirname(__FILE__)) . "/fisic-layer/clspFLUser.php");
require_once (dirname(dirname(__FILE__)) . "/tools/clspMySql.php");

class clspDLUser
 {
	public function __construct() { }
	/*
	public function addToDataBase(clspMySql $vmySql)
	 {
		try
	     {
			$vbytes=openssl_random_pseudo_bytes(5);
    		$this->password=bin2hex($vbytes);
			
			$vsql ="INSERT INTO c_user(id_user, id_userType, id_userStatus, fldfirstName, fldlastName, fldname, fldpassword) ";
			$vsql.="VALUES('" . $this->idUser . "'";;
			$vsql.=", " . $this->userType->idUserType;
			$vsql.=", " . $this->userStatus->idUserStatus;
			$vsql.=", '" . $this->firstName . "'";
			$vsql.=", '" . $this->lastName . "'";
			$vsql.=", '" . $this->name . "'";
			$vsql.=", '" . md5($this->password) . "')";
			
			if ( $vmySql->executeSql($vsql) ){
				if ( $vmySql->getAffectedRowsNumber()!=1 ){
					throw new Exception ("Ocurrió un error al registrar los datos del usuario, intente de nuevo", 0);
				}
			}
			else{
				throw new Exception ("Ocurrió un error al registrar los datos del usuario", -1);
			}
			
			unset($vbytes, $vsql);
			return 1;
		 }
		catch (Exception $vexcepcion)
	     {
			return $vexcepcion->getCode();
		 }
	 }
	
	public function updateInDataBase(clspMySql $vmySql)
	 {
		try{
			$vsql ="UPDATE c_user ";
			$vsql.="SET fldfirstName='" . $this->firstName . "'";
			$vsql.=", fldlastName='" . $this->lastName . "'";
			$vsql.=", fldname='" . $this->name . "'";
			$vsql.="WHERE id_user='" . $this->idUser . "'";
			
			if ( $vmySql->executeSql($vsql) ){
				if ( $vmySql->getAffectedRowsNumber()==0 ){
					throw new Exception ("Ningún dato se ha modificado del usuario", 0);
				}
				if ( $vmySql->getAffectedRowsNumber()!=1 ){
					throw new Exception ("Ocurrió un error al modificar los datos del usuario, intente de nuevo", -1);
				}
			}
			else{
				throw new Exception ("Ocurrió un error al modificar los datos del usuario", -2);
			}
			
			unset($vsql);
			return 1;
		}
		catch (Exception $vexcepcion){
			return $vexcepcion->getCode();
		}
	 }
	*/
	public function updatePasswordInDataBase($vflUser, $vpassword, $vmySql)
	 {
		try{
			$vsql ="UPDATE c_user ";
			$vsql.="SET fldpassword='" . md5($vpassword) . "' ";
			$vsql.="WHERE id_user='" . $vflUser->idUser . "'";
			
			$vmySql->executeSql($vsql);
			if ( $vmySql->getAffectedRowsNumber()==0 ){
				return 0;
			}
			
			unset($vsql);
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function updateStatusInDataBase($vflUser, $vidStatus, $vmySql)
	 {
		try{
			$vsql ="UPDATE c_user ";
			$vsql.="SET id_userStatus=" . $vidStatus . " ";
			$vsql.="WHERE id_user='" . $vflUser->idUser . "'";
			
			$vmySql->executeSql($vsql);
			if ( $vmySql->getAffectedRowsNumber()==0 ){
				return 0;
			}
			
			unset($vsql);
			return 1;
		}
		catch (Exception $vexcepcion){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	/*
	public function deleteInDataBase(clspMySql $vmySql)
	 {
		try{
			$vsql ="DELETE FROM c_user ";
			$vsql.="WHERE id_user='" . $this->idUser . "'";
			if ( $vmySql->executeSql($vsql) ){
				if ( $vmySql->getAffectedRowsNumber()!=1 ){
					throw new Exception ("Ocurrió un error al eliminar los datos del usuario, intente de nuevo", 0);
				}
			}
			else{
				throw new Exception ("Ocurrió un error al eliminar los datos del usuario", -1);
			}
			
			unset($vsql);
			return 1;
		}
		catch (Exception $mExcepcion){
			return $mExcepcion->getCode();
		}
	 }
	*/
	public static function queryToDataBase($vflUser, $vmySql)
	 {
		try{
			$vsql ="SELECT c_user.*, c_userType.flduserType, c_userStatus.flduserStatus ";
			$vsql.="FROM c_user ";
			$vsql.="INNER JOIN c_userType ON c_user.id_userType=c_userType.id_userType ";
			$vsql.="INNER JOIN c_userStatus ON c_user.id_userStatus=c_userStatus.id_userStatus ";
			$vsql.="WHERE c_user.id_user='" . $vflUser->idUser. "'";
			
			$vmySql->executeSql($vsql);
			if ( $vmySql->getConsultedRowsNumber()==1 ){
				$vrow=$vmySql->getData();
				$vflUser->userType->idUserType=(int)($vrow["id_userType"]);
				$vflUser->userType->userType=trim($vrow["flduserType"]);
				$vflUser->userStatus->idUserStatus=(int)($vrow["id_userStatus"]);
				$vflUser->userStatus->userStatus=trim($vrow["flduserStatus"]);
				$vflUser->firstName=trim($vrow["fldfirstName"]);
				$vflUser->lastName=trim($vrow["fldlastName"]);
				$vflUser->name=trim($vrow["fldname"]);
					
				unset($vrow);
			}
			else{
				return 0;
			}
			$vmySql->freeMemory();
			
			unset($vsql);
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public static function verifyPasswordToDataBase($vflUser, $vpassword, $vmySql)
	 {
		try{
			$vsql ="SELECT id_userStatus ";
			$vsql.="FROM c_user ";
			$vsql.="WHERE id_user='" . $vflUser->idUser . "' ";
			$vsql.="AND fldpassword=MD5('" . $vpassword . "')";
			
			$vmySql->executeSql($vsql);
			if ( $vmySql->getConsultedRowsNumber()!=1 ){
				return 0;
			}
			$vrow=$vmySql->getData();
			if ( ((int)(trim($vrow["id_userStatus"])))==0 ){
				return -1;
			}
			
			unset($vpassword, $vsql, $vrow);
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	
	public function __destruct(){ }
 }
?>