<?php
require_once (dirname(dirname(__FILE__)) . "/data-layer/clspDLUser.php");
require_once (dirname(dirname(__FILE__)) . "/data-layer/clspDLMail.php");
require_once (dirname(dirname(__FILE__)) . "/tools/clspMySql.php");

class clspBLUser
 {
	
	public function __construct() { }
	
	public static function queryToDataBase($vflUser)
	 {
		try{
			$vmySql= new clspMySql();
			$vmySql->openConnection();
			$vstatus=clspDLUser::queryToDataBase($vflUser, $vmySql);
			$vmySql->closeConnection();
			
			unset($vmySql);
			return $vstatus;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public static function verifyPasswordToDataBase($vflUser, $vpassword)
	 {
		try{
			$vmySql= new clspMySql();
			$vmySql->openConnection();
			$vstatus=clspDLUser::verifyPasswordToDataBase($vflUser, $vpassword, $vmySql);
			$vmySql->closeConnection();
			
			unset($vpassword, $vmySql);
			return $vstatus;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	 
	public static function activeInDataBase($vflUser)
	 {
		try{
			$vstatus=-1;
			if ( $vflUser->userStatus->idUserStatus!=1 ){
				$vmySql= new clspMySql();
				$vmySql->openConnection();
				$vstatus=clspDLUser::updateStatusInDataBase($vflUser, 1, $vmySql);
				$vmySql->closeConnection();
				
				unset($vmySql);
			}
			return $vstatus;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	 
	public static function recoveryPasswordToEmail($vflUser)
	 {
		try{
			$vbytes=openssl_random_pseudo_bytes(5);
    		$vpassword=bin2hex($vbytes);
			
			$vmySql= new clspMySql();
			$vmySql->openConnection();
			if ( clspDLUser::queryToDataBase($vflUser, $vmySql)==1 ){
				$vmySql->startTransaction();
				if ( clspDLUser::updatePasswordInDataBase($vflUser, $vpassword, $vmySql)==1 ){
					$vflMail= new clspFLMail();
					$vflMail->sendingUserName="Portal WEB - Restaurantes";
					$vflMail->subject="Recuperación de contraseña: Restaurantes";
					$vflMail->receiverAddress=$vflUser->idUser;
					$vflMail->receiverUserName=$vflUser->name . " " . $vflUser->firstName . " " . $vflUser->lastName;
					$vflMail->message ="<p>Su contraseña fué reestablecida: ". $vpassword . "</p>";
					$vflMail->message.="<p>Ingrese al sistema con esta contraseña y camabiela; ya que es temporal.<br />";
					$vflMail->message.="Gracias.</p>";
					if ( clspDLMail::sendEmail($vflMail)!=1 ){
						$vmySql->rollbackTransaction();
						$vmySql->closeConnection();
						return 0;
					}
				}
				else{
					$vmySql->rollbackTransaction();
					$vmySql->closeConnection();
					return -1;
				}
			}
			else{
				$vmySql->closeConnection();
				return -2;
			}
			$vmySql->commitTransaction();
			$vmySql->closeConnection();			
			
			unset($vbytes, $vpassword, $vmySql, $vflMail);
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function __destruct() { }
 }
?>