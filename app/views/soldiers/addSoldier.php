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
	<script src="js/insert.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>
</head>

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
                 <li ><a href="main">Home</a></li>
                 <li class="active"><a href="products">Products</a></li>
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
    <div class="panel panel-default">
          <div class="panel-heading"><button type="button" class="btn btn-link">Add soldier</button></div>
          <div class="panel-body">
	<form action="addSoldier" id="formregister" method="POST" enctype="multipart/form-data">
  	 <fieldset class="form-group">
       <p>File:<input type="file" name="image"></p>
    </fieldset>
    <fieldset class="form-group">
       <label for="nameForm">Name</label>
       <input type="text" class="form-control" id="nameForm" name="nameForm"  placeholder="Name">
    </fieldset>
     <fieldset class="form-group">
       <label for="service_numberForm">Service Number</label>
       <input type="number" class="form-control" id="service_numberForm" name="service_numberForm"  placeholder="Name">
    </fieldset>
      <fieldset class="form-group">
      <label for="rankForm">Rank</label>
      <select class="form-control" id="rankForm" name="rankForm" >
         <option value="captain" name="captain">Captain</option>
         <option value="major" name="major">Major</option>
         <option value="staff_sergeant" name="staff_sergeant">Staff Sergeant</option>
         <option value="technical_sergeant" name="technical_sergeant">Technical Sergeant</option>
         <option value="master_sergeant" name="master_sergeant">Master Sergeant</option>
         <option value="commander" name="commander">Commander</option>
         <option value="sergeant" name="sergeant">Sergeant</option>
         <option value="corporal" name="corporal">Corporal</option>
      </select>
    </fieldset>

     <fieldset class="form-group">
       <label for="unitForm">Unit </label>
       <input type="text" class="form-control" id="unitForm" name="unitForm"  placeholder="Unit">
    </fieldset>
    <fieldset class="form-group">
       <label for="date_of_birthForm">Date of Birth </label>
       <input type="date" class="form-control" id="date_of_birthForm" name="date_of_birthForm"  placeholder="Date of Birth">
    </fieldset>
    <fieldset class="form-group">
       <label for="nationalityForm">Nationality </label>
       <input type="text" class="form-control" id="nationalityForm" name="nationalityForm"  placeholder="Nationality">
    </fieldset>
       <fieldset class="form-group">
       <label for="branchForm">Branch </label>
       <input type="text" class="form-control" id="branchForm" name="branchForm"  placeholder="Branch">
    </fieldset>
  
<button type="submit" name="Submit1" class="btn btn-primary">Submit</button>
</form>
        </div>
        </div>

</div>
</div>
	</content>
	<footer></footer>
</body>
</html>
