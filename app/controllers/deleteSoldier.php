<?php
class deleteSoldier extends Controller{
 public function index()
	{
		include 'connect-db.php';
		$this->view('soldiers/deleteSoldier');
		$this->model('Item');
		$serviceNumberForm="";

		if(!empty($_POST["serviceNumberForm"]))
		{
			$serviceNumberForm = $_POST["serviceNumberForm"];
		}
	

  		mysql_query( "DELETE FROM soldiers  WHERE service_number='$serviceNumberForm'");

 }
}
?>
