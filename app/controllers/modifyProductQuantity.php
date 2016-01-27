<?php
class modifyProductQuantity extends Controller{
 public function index()
	{
		include 'connect-db.php';
		$this->view('addProduct/quantity');
		$this->model('Item');
		$nsnForm="";
		$quantityForm="";

		if(!empty($_POST["nsnFormQuantity"]))
		{
			$nsnForm = $_POST["nsnFormQuantity"];
		}
		if(!empty($_POST["quantityFormQuantity"]))
		{
			$quantityForm = $_POST["quantityFormQuantity"];
		}

  		mysql_query( "UPDATE item SET Quantity='$quantityForm' WHERE NSN='$nsnForm'");

 }
}
?>
