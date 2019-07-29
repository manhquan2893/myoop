<?php
require BASE_PATH . '/models/AuthorModel.php';
if(isset($_POST['username']) && isset($_POST['pass'])){
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$author = new AuthorModel();
	$autho= $author->getByColumn('name',$username);
	if($autho==null){
		echo "ten dang nhap chua dung";
	}
	else if($autho['pass'] != md5($pass)){
		echo "mat khau chua dung";
	}
	else {
		session_start();
		$_SESSION['id']=$autho['id'];
		$_SESSION['name']=$autho['name'];
		echo "Xin chao $username";
	}
}

require BASE_PATH . '/views/login.php'; 

 ?>