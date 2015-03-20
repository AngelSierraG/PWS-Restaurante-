<?php

class clspMySql
 {
	private	$serverName, $userName, $password, $dbName;
	private	$link, $db, $query;
	
    public function __construct()
     {
		$this->serverName= "localhost";
		$this->userName= "root";
		$this->password= "";
		$this->dbName="pwsr_db";
     }
	
	public function openConnection($vtype=0)
	 {
		try{
			$this->link= @mysql_connect($this->serverName, $this->userName, $this->password);
			if ( ! is_resource($this->link) ){
				throw new Exception ("Ocurrio un error al tratar de conectarse a la Base de Datos.", -1000);
			}
			else{
				$this->db= mysql_select_db($this->dbName, $this->link);
				if ( ! $this->db ){
					throw new Exception ("Ocurrio un error al tratar de seleccionar la Base de Datos.", -1001);
				}
				if ( $vtype==0 ){
					$this->execute("SET NAMES 'utf8'");
				}
				else{
					$this->execute("SET NAMES 'latin1'");
				}
			}
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function closeConnection()
	 {
		$this->__destruct();
	 }
	
	public function execute($mSql)
	 {
		try{
			$this->query=mysql_query(trim($mSql));
			if ( (is_bool($this->query)) && ($this->query==false) ){
				throw new Exception (mysql_error(), mysql_errno());
			}
			
			return $this->query;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function executeSql($mSql)
	 {
		try{
			if ( ($this->link!=NULL) && ($this->link!=false) && (is_resource($this->link)) ){
				$this->query= mysql_query(trim($mSql), $this->link);
				if ( (is_bool($this->query)) && ($this->query==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
				
				return $this->query;
			}
			else{
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function getConsultedRowsNumber()
	 {
		try{
		 	if ( ($this->query!=NULL) && ($this->query!=false) && (is_resource($this->query)) ){
				$vnumberRows= mysql_num_rows($this->query);
				if ( (is_bool($vnumberRows)) && ($vnumberRows==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
				
				return $vnumberRows;
			}
			else{
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	 
	public function getConsultedFieldsNumber()
	 {
		try{
		 	if ( ($this->query!=NULL) && ($this->query!=false) && (is_resource($this->query)) ){
				$vnumberFields= mysql_num_fields($this->query);
				if ( (is_bool($vnumberFields)) && ($vnumberFields==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
				
				return $vnumberFields;
			}
			else{
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function getAffectedRowsNumber()
	 {
		try{
			if ( ($this->link!=NULL) && ($this->link!=false) && (is_resource($this->link)) ){
				$vaffectedRows= mysql_affected_rows($this->link);
				if ( (is_bool($vaffectedRows)) && ($vaffectedRows==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
				
				return $vaffectedRows;
			}
			else{
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function getData()
	 {
		try{
		 	if ( ($this->query!=NULL) && ($this->query!=false) && (is_resource($this->query)) ){
				$vfetchArray=mysql_fetch_array($this->query);
				if ( (is_bool($vfetchArray)) && ($vfetchArray==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
				
				return $vfetchArray;
			}
			else{	
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){	
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	 
	public function getDataAlias()
	 {
		try{
		 	$vfetchArray=$this->getData();
			if ( !$vfetchArray ){
        		return false;
    		}
			$vfetchArrayAlias=array();
			$vfieldsNumber=$this->getConsultedFieldsNumber();
			for ($vid=0; $vid<$vfieldsNumber; $vid++){
				$vtableName = mysql_field_table($this->query, $vid);
				$vfieldName = mysql_field_name($this->query, $vid);
				$vfetchArrayAlias["$vtableName.$vfieldName"] = $vfetchArray[$vid];
			}
			
			return $vfetchArrayAlias;
		}
		catch (Exception $vexception){	
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function freeMemory()
	 {
	 	try{
			if ( ($this->query!=NULL) && ($this->query!=false) && (is_resource($this->query)) ){
			 	$vfreeResult=mysql_free_result($this->query);
				if ( (is_bool($vfreeResult)) && ($vfreeResult==false) ){
					throw new Exception (mysql_error($this->link), mysql_errno($this->link));
				}
			}
			else{	
				throw new Exception (mysql_error(), mysql_errno());
			}
		}
		catch (Exception $vexception){	
			throw new Exception ($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	public function startTransaction()
	 {
		$this->execute("START TRANSACTION");
	 }
	
	public function commitTransaction()
	 {
		$this->execute("COMMIT");
	 }
	
	public function rollbackTransaction()
	 {
		$this->execute("ROLLBACK");
	 }
	
	public function __destruct()
	 {
		unset($this->serverName, $this->userName, $this->password, $this->dbName, $this->link, $this->db, $this->query);
	 }
 }
 
?>