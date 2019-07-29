<?php

 
class BaseModel{
	static $conn;
	private $query;
	
	function __construct(){
		$database=  require_once BASE_PATH . '/config/database.php';
		$host= $database['host'];
		$dbname=$database['dbname'];
		$username=$database['username'];
		$password=$database['password'];
		if(!self::getConnect()){
			$conn1 = new mysqli($host, $username, $password, $dbname);
			// Check connection
			if ($conn1->connect_error) {
			    die("Connection failed: " . $conn1->connect_error);
			} 
			self::$conn = $conn1;
		}
	}
	public static function getConnect(){
		return self::$conn;
	}
	public function setQuery($query){
		$this->query  = $query;
	}
	public function getQuey($query){
		return $this->query;
	}
	function execute($sql){
		$result=$this->getConnect()->query($sql);
		if ($result->num_rows > 0) {
		        while ($row = mysqli_fetch_array($result)) {
		        	$rows[]= $row;
		        }
		        return $rows;
		} else {
		    return null;
		}
	}
	
	function getAll(){
		$sql="SELECT * FROM $this->table";
		$result=$this->getConnect()->query($sql);
		print_r($result);
		if ($result->num_rows > 0) {
		        while ($row = mysqli_fetch_array($result)) {
		        	$rows[]= $row;
		        }
		        return $rows;
		} else {
		    return null;
		}
		//$this->execute($sql);
		
	}
	function getByColumn($column,$value){
		$sql="SELECT * FROM $this->table Where $column = '$value'";
		$result=$this->getConnect()->query($sql);
		if ($result->num_rows > 0) {
		        while ($row = mysqli_fetch_array($result)) {
		        	$rows[]= $row;
		        }
		        return $rows[0];
		} else {
		    return null;
		}
	}
	public function getAllRecords(){
		$result=$this->getConnect()->query($this->getQuey());
		print_r($result);
		if ($result->num_rows > 0) {
		        while ($row = mysqli_fetch_array($result)) {
		        	$rows[]= $row;
		        }
		        return $rows;
		} else {
		    return null;
		}
	}
	/*public function insert($tabe, $values){

	}*/
	
}

 ?>