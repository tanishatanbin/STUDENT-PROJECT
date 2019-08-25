<?php

include_once 'config.php';

class crud extends config {
    public function __construct(){
        parent:: __construct();
    }
	 public function getdata($query){
		 $result=$this->connection->query($query);
		 if(!$result){
			 
		 return false;
		 }		 
		 
		 $rows=array();
		 while($row=$result->fetch_assoc()){
			 $rows[]=$row;
		 }
		 return $rows;
	 }
	    public function execute($query){
		$result=$this->connection->query($query);
		if($result==false){
			return false;
		}
		else{
			return true;
		}
		}
		
		public function delete($id,$table){
			$query="DELETE FROM $table WHERE id=$id";
			$result=$this->connection->query($query);
			if($result== false){
				return false;
			}
			return true;
				}
		
}
?>