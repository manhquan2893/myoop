<?php 
/**
 * 
 */
require_once BASE_PATH . '/models/TintucModel.php';
require_once BASE_PATH . '/controllers/FileController.php';
session_start();
if(!$_SESSION['id']){
	header("Location:". '?module=login'); 

}
echo 'Xin chào ' . $_SESSION['name'];

if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$id_loaitin=$_POST['id_loaitin'];
	$file = new FileController();
	$filename=$file->upload();
	$tintuc= new TintucModel();
	$tintuc->insert($title,$description,$content,$id_loaitin,$filename);
}
require_once BASE_PATH . '/views/postForm.php';
