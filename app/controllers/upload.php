<?php 
class upload extends Controller{
 public function index()
	{
move_uploaded_file($_FILES['webcam']['tmp_name'], 'images/uploads/webcam'.'.jpg');
}
}
 ?>