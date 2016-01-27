<!doctype html>
<html>
	<head></head>
	<body>

	</body>
</html>
<?php
class Soldier extends Controller
{
	public function index()
	{
		$this->view('soldier/index');
		//$this->model('SoldierModel');
	}
}
?>
