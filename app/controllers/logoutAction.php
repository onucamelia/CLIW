<?php
	class logoutAction extends Controller{
 public function index(){
	session_start();
	if(!empty($_SESSION['user']))
	{
		$_SESSION['user']='';
		session_destroy();
	}
	header("location:login");
	}
}
?>