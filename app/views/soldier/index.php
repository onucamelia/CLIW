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
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scriptSoldier.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="js/Chart.js"></script>
</head>

<body>
<div id="header">
  <div class="container">
    
  <div id="header-left">
      <div class="col-sm-10" id="logo">
        <a href="main"><img class="img-responsive" src="images/logo.png"/></a>
      </div>
  </div>
            <div id="header-right" class="navbar navbar-inverse">
          
         
              <ul class="nav navbar-nav">
                 <li  ><a href="main">Home</a></li>
                 <li ><a href="products">Products</a></li>
                 <li class="active"><a href="soldiers">Soldiers</a></li>
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
    		 <div class="panel-heading">Details</div>
      		 <div class="panel-body">
             <img id="soldierImage" class="img-responsive">
             <table id="table_details" class="table">
             <tr>
                  <td>NAME</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Service Number</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Rank</td>
                  <td></td>
                </tr>
                
              
              </table>

           </div>

  		</div>

  		<div class="panel panel-default">
   		     <div class="panel-heading">Identification</div>
      		 <div class="panel-body">
      		 	<div class="table-responsive">
   <table class="table" id="identification">
    <thead>
      <tr>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="FEDERAL ITEM IDENTIFICATION GUIDE">Unit</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="ITEM NAME CODE">Date of Birth</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="CRITICALITY CODE, FEDERAL ITEM IDENTIFICATION GUIDE">Nationality</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="TYPE OF ITEM IDENTIFICATION CODE">Branch</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
       </tbody>
  </table>
</div>
      		 </div>
  		</div>
  		
      				</table>
      		 </div>
      		 </div>
  		</div>
	</div>
</div>
</div>
	</content>


	<footer>
  
  </footer>

<script>



</script>
</body>
</html>

