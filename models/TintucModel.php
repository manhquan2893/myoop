<?php 
/**
 * 
 */
require_once BASE_PATH . '/models/StatModel.php';
require_once BASE_PATH . '/models/LoaitinModel.php';
class TintucModel extends BaseModel
{
	protected $table='tintuc';
	function __construct($table='tintuc'){
		//$this->table = $table;
		parent::__construct();
	}
	function insert($_title,$_des,$_content,$_idloaitin,$_filename){

		$date = date("Y-m-d");
		$sql=" INSERT INTO $this->table 
			(title, description, content, id_stat, id_loaitin,created_at,thumb)
			VALUES ('$_title', '$_des', '$_content',2, $_idloaitin, '$date','$_filename')";
		$this->conn->query($sql);
	}
}

 ?>