<?php 
session_start();
if($_SESSION['user']=='NO')
{
    header("Location: login");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>
     <script type='text/javascript' src='js/login.js'></script>

<body id="index">

<div id="header">
  <div class="container">
    
  <div id="header-left">
      <div class="col-sm-10" id="logo">
        <a href="main"><img class="img-responsive" src="images/logo.png"/></a>
      </div>
  </div>
            <div id="header-right" class="navbar navbar-inverse">
          
         
              <ul class="nav navbar-nav">
                 <li class="active" ><a href="main">Home</a></li>
                 <li ><a href="products">Products</a></li>
                 <li><a href="soldiers">Soldiers</a></li>
                 <li><a href="#">Packages</a></li>
              </ul>


      <div class="col-sm-4" id="settings">
        <div class="row"></div>
        <div class="col-sm-10"><p><?php echo $_SESSION['user']; ?></p></div>
        <div class="col-sm-10">My account | <a href ="logoutAction"> Log Out</a></div>
       
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
      	 <div class="panel-body">  <div id="chart_div"></div></div>
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
      <div class="panel-heading"><button onclick="location.href ='products'" type="button" class="btn btn-link">Products</button></div>
      <div class="panel-body">
      	<div class="well well-panel">
      		<img class="img-responsive" src="images/package-plus.png">
      		<button type="button" onclick="location.href='addProduct';" class="btn btn-link">Add a new item</button>
      	</div>
          <div class="well well-panel">
          <img class="img-responsive" src="images/package-modify.png">
          <button type="button" onclick="location.href='modifyProductQuantity';" class="btn btn-link">Modify quantity</button>
        </div>
      	
          <div class="well well-panel">
          <img class="img-responsive" src="images/package-minus.png">
          <button type="button" onclick="location.href='deleteProduct';" class="btn btn-link">Delete item</button>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><button onclick="location.href ='soldiers'"  type="button" class="btn btn-link">Soldiers</button></div>
      <div class="panel-body">
      		<div class="well well-panel">
      		<img class="img-responsive" src="images/soldat-plus.png">
      		<button type="button" onclick="location.href ='addSoldier'"  class="btn btn-link">Add soldier</button>
      	</div>
      		<div class="well well-panel">
      		<img class="img-responsive" src="images/soldat-minus.png">
      		<button type="button" onclick="location.href ='deleteSoldier'"  class="btn btn-link">Delete soldier</button>
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
