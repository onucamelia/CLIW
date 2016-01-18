<?php
include 'connect-db.php';
class addProduct extends Controller{
 public function index()
	{
			$this->view('addProduct/index');
		if(isset($_POST['upfile'])){
			$file=$_FILES['image']['tmp_name'];
		if(!isset($file))
			echo "Please select an image.";
		else
		{
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);
			$image_size=getimagesize($_FILES['image']['tmp_name']);
			$image_name = substr($image_name, 0, -4);
			if($image_size==FALSE)
				echo "That`s not an image";
			else{
				if(!$insert=mysql_query("Insert into products values ('','$image_name','$image')"))
					echo "Problem uploading image";
				else
					{
						echo "Image uploaded.<p />Your image:";
					}
				}

		}

	}

	
	}
 }
?>
