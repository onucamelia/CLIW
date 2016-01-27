<?php
session_start();
class login extends Controller{
 public function index()
	{

$this->view('login/index');
$this->model('compareImages');



}
}
?>