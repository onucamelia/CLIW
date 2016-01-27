<?php
class deleteProduct extends Controller{
 public function index()
	{
		include 'connect-db.php';
		$this->view('addProduct/delete');
		$this->model('Item');
		$nsnForm="";
		$quantityForm="";

		if(!empty($_POST["nsnFormQuantity"]))
		{
			$nsnForm = $_POST["nsnFormQuantity"];
		}
	

  		mysql_query( "DELETE FROM item  WHERE NSN='$nsnForm'");

 }
}
?>
