<?php
class config{
	private $_host="localhost";
	private $_user="root";
	private $_pass="";
	private $_db="clint";
	protected $connection;
	public function __construct(){
		if(!isset($this->connection)){
			$this->connection=new mysqli($this->_host,$this->_user, $this->_pass, $this->_db);  
			if(!$this->connection){
				exit;
			}
		}
		return $this->connection;
	}
}