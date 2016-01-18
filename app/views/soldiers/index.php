<?php 

if( !session_id() )
{
    session_start();
}


?>
<!DOCTYPE html>
<html>

<head>

   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scriptProducts.js"></script>

   <script type='text/javascript' src='js/login.js'></script>

</head>

<body>
 
<div id="header">
  <div class="container">
    <div id="header-left">
      <div class="col-sm-10" id="logo">
        <img class="img-responsive" src="images/logo.png"/>
      </div>
    </div>
    <div id="header-right" class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li ><a href="main">Home</a></li>
        <li class="active"><a href="products">Products</a></li>
        <li><a href="soldiers">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        </ul>
      <div class="col-sm-4" id="settings">
        <div class="row"></div>
          <div class="col-sm-10"><p id="admin-hello"></p></div>
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
         <div class="panel-heading">Details</div>
         <div class="panel-body soldiers ">
              
 
        
      

 
  </div>
         </div>
      </div>
    </div>
  </div>
  </content>


  <footer>
  
  </footer>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


</script>
</body>
</html>

