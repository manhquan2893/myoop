<?php 
/**
 * 
 */
class LoaitinModel extends BaseModel
{
	protected $table='loaitin';
	function __construct($table='loaitin'){
		$this->table = $table;
		parent::__construct();
	}
}
 ?>