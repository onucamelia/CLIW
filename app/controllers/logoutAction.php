<?php
	class logoutAction extends Controller{
 public function index(){
	session_start();
	
		$_SESSION['user']='NO';
		session_destroy();
	
	header("location:login");
	}
}
?>