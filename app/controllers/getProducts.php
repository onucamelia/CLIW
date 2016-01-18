<?php 
class getProducts extends Controller{
 public function index()
	{

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_database='CArmy';

mysql_connect("localhost", "root", "") or die('Error connecting to MySQL server: ' . mysql_error());
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
		
		if(isset($_GET['nsn']))
        {
           $nsn = $_GET['nsn'];

         }
	
		$query = mysql_query("select * from item where NSN=$nsn");
		$result=array();
		while($row=mysql_fetch_assoc($query)){
 			$result[] = $row;

	    }     
	 echo json_encode($result);

	}
}
 ?>
