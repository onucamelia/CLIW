
<!DOCTYPE html>
<html>
<head>
   <script src="js/webcam.js"></script>

</head>
<body>
<div id="my_camera"></div>
<form>
		<input type='button' class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()  ">
	</form>
<div id="results" class="well">.</div>

<form action="comparare">
  <input type="submit" value="GATA!">
</form>
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
		function take_snapshot() {
			Webcam.snap( function(data_uri) {
				document.getElementById('results').innerHTML = '<h2>Here is your image:</h2>' + '<img src="'+data_uri+'"/>';
                                Webcam.upload( data_uri, 'upload', function(code, text) {});
							
			} );
		 
		}
	</script>
</body>
</html>



