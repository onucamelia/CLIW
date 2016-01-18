<!doctype html>
<html>
	<head></head>
	<body>

	</body>
</html>
<?php
class Product extends Controller
{
	public function index()
	{
		$this->view('product/index');
		$this->model('Item');
	}
}
?>
