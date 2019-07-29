<?php 
require_once BASE_PATH.'/models/LoaitinModel.php';
require_once BASE_PATH.'/models/TintucModel.php';
require_once BASE_PATH . '/loader/ViewLoader.php';


$loaitin = new LoaitinModel();
$loaiti= $loaitin->getAll();
$tintuc=new TintucModel();
$tintu= $tintuc->getAll();
//print_r($tintuc->conn);

require BASE_PATH.'/views/home.php';

 ?>