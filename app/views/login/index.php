<?php 

if( !session_id() )
{
    session_start();
}


?>
<!DOCTYPE html>
<html>
<head>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="js/webcam.js"></script>

</head>
<body id="login">
<content >
<div  id="my_camera"></div>
</div>
<form id="snap">
		<input id="snapshot" type='button' class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()  ">
<script>
$( "input" ).click(function() {
$( "#my_camera" ).fadeOut( 500);
});
</script>
	</form>


<form  style="display:none" action="comparare" id="login-form" method="post">

  <input type="submit" id="login-submit" class="btn btn-default" value="GATA!">
</form>
	<script language="JavaScript">
	Webcam.set({
			width: 500,
			height: 388,
			image_format: 'jpeg',
			jpeg_quality: 100
		});
		Webcam.attach( '#my_camera' );
		function take_snapshot() {
			document.getElementById("snapshot").style.display="none";
			document.getElementById("login-form").style.display="block";
			Webcam.snap( function(data_uri) {
				document.getElementById('my_camera').innerHTML = '<img  style="height:388px; width:500px;" src="'+data_uri+'"/>';
                Webcam.upload( data_uri, 'upload', function(code, text) {});
			
    		
			} );
		 
		}

	$( "#snapshot" ).click(function() {
 	 $( "#my_camera" ).fadeIn(500)
});
	</script>
</content>

<script>


var session;
$.ajaxSetup({cache: false})
$.get('comparare', function (data) {
  if(data)
  {
  	//alert(data);
  }
  else {

     // window.location.href="login";
   }


});



</script>
</body>
</html>





