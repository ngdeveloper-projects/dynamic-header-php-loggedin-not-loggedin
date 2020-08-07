<?php
if(!isset($_SESSION)){session_start();}
if(isset($_POST['hs'])){
	$action = $_POST['hs'];
	if($action=="with_login"){
		$_SESSION ['IS_USER_LOGGEDIN'] = 1;
		//header('Location:index_blog.php');
		echo 1;
	}else if($action=="without_login"){
		$_SESSION ['IS_USER_LOGGEDIN'] = 0;
		echo 0;
	}
}
?>