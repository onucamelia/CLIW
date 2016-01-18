<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body>
	<header>
		<div class="container">
			<div class="col-sm-2" id="logo">
				<img class="img-responsive" src="images/logo.png"/>
			</div>

			<div class="col-sm-4" id="settings">
				<div class="row"></div>
				<div class="col-sm-8"><p>Welcome Administrator</p></div>
				<div class="col-sm-8">My account | Log Out</div>
				<div class="col-sm-8"><?php $t=time();  echo(date("Y-m-d",$t)); ?></div>
				<div class="col-sm-8"><?php   echo(date("h:i:sA")); ?></div>
			</div>



		</div>

					<nav class="navbar navbar-inverse">
  				<div class="container">
    				<div class="navbar-header">
     					 <a class="navbar-brand" href="#">Main Controls</a>
    				</div>
    			<div>
      				<ul class="nav navbar-nav">
       					 <li ><a href="main">Home</a></li>
       					 <li class="active"><a href="products">Page 1</a></li>
        				 <li><a href="soldiers">Page 2</a></li>
       					 <li><a href="#">Page 3</a></li>
    				  </ul>
   				 </div>
 			 </div>
</nav>
	</header>

	<content>
		<div class="container">	
		<div id="sidebar" class="col-sm-3">
		<div class="panel-group">
    		<div class="panel panel-default">
      		<div class="panel-heading">Panel Header</div>
      		<div class="panel-body">Panel Content</div>
    		</div>
    		<div class="panel panel-default">
      		<div class="panel-heading">Panel Header</div>
      		<div class="panel-body">Panel Content</div>
  			</div>
		</div>
	</div>
		<div id="main" class="col-sm-9">
	<form action="addProduct" method="POST" enctype="multipart/form-data">

		<p>File:<input type="file" name="image"></p>
		<br>
				<br>
		<input type="submit" value="Upload" name="upfile">

	</form>
</div>
	</content>
	<footer></footer>
</body>
</html>
