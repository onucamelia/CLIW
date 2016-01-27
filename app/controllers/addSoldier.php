<?php
class addSoldier extends Controller{
 public function index()
	{
		include 'connect-db.php';
		$this->view('soldiers/addSoldier');
		$this->model('Item');
		$nameForm=$service_numberForm=$file=$unitForm=$date_of_birthForm=$nationalityForm=$branchForm=$rankForm=$rankVal="";
		 move_uploaded_file($_FILES['image']['tmp_name'],"images/products/" . $_FILES["image"]["name"]);
        $file="images/products".$_FILES['image']['name'];
        if(!empty($_POST["nameForm"]))
		{
			$nameForm = $_POST["nameForm"];
		}
	
		  if(!empty($_POST["service_numberForm"]))
		{
			$service_numberForm = $_POST["service_numberForm"];
		}
		  if(!empty($_POST["unitForm"]))
		{
			$unitForm = $_POST["unitForm"];
		}
		  if(!empty($_POST["date_of_birthForm"]))
		{
			$date_of_birthForm = $_POST["date_of_birthForm"];
		}
		  if(!empty($_POST["nationalityForm"]))
		{
			$nationalityForm = $_POST["nationalityForm"];
		}
		  if(!empty($_POST["branchForm"]))
		{
			$branchForm = $_POST["branchForm"];
		}
			if(!empty($_POST["criticallyForm"]))
		{
		$rankVal = $_POST['rankForm'];
			if($rankVal=='captain')
				 $rankForm="captain";
			else if($rankVal=='major')
				 $rankForm="major";
			else if($rankVal=='staff_sergeant')
				 $rankForm="staff sergeant";
			else if($rankVal=='technical_sergeant')
				 $rankForm="technical sergeant";
			else if($rankVal=='master_sergeant')
				 $rankForm="master sergeant";
			else if($rankVal=='commander')
			 	$rankForm="commander";
			else if($rankVal=='sergeant')
			 	$rankForm="sergeant";
			else if($rankVal=='corporal')
				 $rankForm="corporal";
		}
$sql= "INSERT INTO soldiers VALUES ('$nameForm','$file', '$service_numberForm', '$rankForm','$unitForm', '$date_of_birthForm', 'nationalityForm','$branchForm')";
  mysql_query($sql);

 }
}
?>
