<?php
session_start();
class comparare extends Controller{
 public function index()
	{
$this->model('compareImages');

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_database='carmy';

mysql_connect("localhost", "root", "") or die('Error connecting to MySQL server: ' . mysql_error());
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());



$s=new compareImages();


include_once('lib/QrReader.php');
$qrcode = new QrReader('images/uploads/webcam.jpg');
$_SESSION['user']='';
$text='';
$text = $qrcode->text(); 
$image='';
$query=mysql_query("SELECT name FROM users WHERE id = '$text'");
$num_rows = mysql_num_rows($query);


if($num_rows>0)
{
	$image=mysql_result(mysql_query("SELECT name FROM users WHERE id = '$text'"),0,'name') or die( "Unable to show field"); 
	$_SESSION['user']=$image;
	print json_encode($_SESSION['user']);

header("location:main");
}

else
	{
		
		$_SESSION['user']='NO';
		echo $_SESSION['user'];
}

/*if( $s->compare('images/uploads/webcam.jpg',$image)<15)
{
	echo "Succesful login";
	
}
else
	echo "Try again";

}
*/
}
}
?>