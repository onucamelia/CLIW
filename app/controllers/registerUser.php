<?php
class registerUser extends Controller{
 public function index()
	{
		include 'connect-db.php';
		$this->view('login/register');
		$this->model('Item');
		if (isset($_POST['submit'])) {
		$nameForm=$service_numberForm=$file=$unitForm=$date_of_birthForm=$nationalityForm=$branchForm=$rankForm=$rankVal="";
		 move_uploaded_file($_FILES['image']['tmp_name'],"images/users/" . $_FILES["image"]["name"]);
        $file="images/users".$_FILES['image']['name'];
        if(!empty($_POST["nameForm"]))
		{
			$nameForm = $_POST["nameForm"];
		}
	
		  if(!empty($_POST["ninForm"]))
		{
			$ninForm = $_POST["ninForm"];
		}
		  if(!empty($_POST["date_of_birthForm"]))
		{
			$date_of_birthForm = $_POST["date_of_birthForm"];
		}
		$nationalityForm = isset($_POST['nationalityForm']) ? $_POST['nationalityForm'] : false;
		$id=$nationalityForm.substr($nameForm, 0,2).substr($ninForm, -2, 2).'*'.substr($ninForm, 0,2); 


$sql= "INSERT INTO users VALUES ('$id','$ninForm', '$file', '$nameForm','$date_of_birthForm', '$nationalityForm')";
 mysql_query($sql);
}
		

 }
}
?>
