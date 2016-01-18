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

<body id="index">

<div id="header">
  <div class="container">
    
  <div id="header-left">
      <div class="col-sm-10" id="logo">
        <img class="img-responsive" src="images/logo.png"/>
      </div>
  </div>
            <div id="header-right" class="navbar navbar-inverse">
          
         
              <ul class="nav navbar-nav">
                 <li class="active"><a href="main">Home</a></li>
                 <li><a href="products">Products</a></li>
                 <li><a href="soldiers">Page 2</a></li>
                 <li><a href="#">Page 3</a></li>
              </ul>


      <div class="col-sm-4" id="settings">
        <div class="row"></div>
        <div class="col-sm-10"><p>Welcome Administrator</p></div>
        <div class="col-sm-10">My account | Log Out</div>
       
      </div>
      
       
</div>
</div>
</div>
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
		<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><button type="button" class="btn btn-link">Products</button></div>
      <div class="panel-body">
      	<div class="well well-panel">
      		<img class="img-responsive" src="images/package-plus.png">
      		<button type="button" onclick="location.href='addProduct';" class="btn btn-link">Add product</button>
      	</div>
      	<div class="well well-panel">
      		<img class="img-responsive" src="images/package-minus.png">
      		<button type="button" class="btn btn-link">Delete product</button>
      	</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><button type="button" class="btn btn-link">Soldiers</button></div>
      <div class="panel-body">
      		<div class="well well-panel">
      		<img class="img-responsive" src="images/soldat-plus.png">
      		<button type="button" class="btn btn-link">Add soldier</button>
      	</div>
      		<div class="well well-panel">
      		<img class="img-responsive" src="images/soldat-minus.png">
      		<button type="button" class="btn btn-link">Delete soldier</button>
      	</div>
      </div>

  </div>
  <div class="panel panel-default">
      		<div class="panel-heading"><button type="button" class="btn btn-link">Packages</button></div>
      		<div class="panel-body">
      			
      		</div>
  			</div>
		</div>
    </div>
</div>
	</content>
	<footer></footer>
</body>
</html>
