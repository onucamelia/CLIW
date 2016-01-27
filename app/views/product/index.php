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
  <script type="text/javascript" src="js/script.js"></script>
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
	<div class="panel-group">
  		<div class="panel panel-default">
    		 <div class="panel-heading">Details</div>
      		 <div class="panel-body">
             <img id="productImage" class="img-responsive">
             <table id="table_details" class="table">
             <tr>
                  <td>NAME</td>
                  <td></td>
                </tr>
                <tr>
                  <td>NSN</td>
                  <td></td>
                </tr>
                <tr>
                  <td>QUANTITY</td>
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
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="FEDERAL ITEM IDENTIFICATION GUIDE">FIIG</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="ITEM NAME CODE">INC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="CRITICALITY CODE, FEDERAL ITEM IDENTIFICATION GUIDE">CRITICALY</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="TYPE OF ITEM IDENTIFICATION CODE">TYPE_II</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="DEMILITARIZATION CODE">DEMIL</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="NIIN ASSIGNMENT DATE">DATE</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="ELECTROSTATIC DISCHARGE/ELECTROMAGNETIC INTERFERENCE CODE">ESD</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="PRECIOUS METALS INDICATOR CODE">PMIC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="AUTOMATIC DATA PROCESSING EQUIPMENT IDENTIFICATION CODE">ADPEC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="HAZARDOUS MATERIALS INDICATOR CODE">HMIC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="HAZARDOUS CHARACTERISTICS CODE">HCC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="ENVIRONMENTAL ATTRIBUTE CODE (ENAC)">ENAC</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
  		<div class="panel panel-default">
   		     <div class="panel-heading">Reference</div>
      		 <div class="panel-body">
      		 	<div class="table-responsive">
      		 	<table class="table" id="reference">
    <thead>
      <tr>
        <th>SUPPLIER</th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="COMMERCIAL AND GOVERNMENT ENTITY CODE">CAGE</a></th>      
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="REFERENCE NUMBER, LOGISTICS">PART NUMBER</a></th>      
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="CAGE/NCAGE STATUS CODE">STAT</a></th>      
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="REFERENCE NUMBER CATEGORY CODE">RNCC</a></th>       
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="REFERENCE NUMBER VARIATION CODE">RNVC</a></th>       
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="DOCUMENT AVAILABILITY CODE">DAC</a></th>        
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="REFERENCE NUMBER ACTION ACTIVITY CODE">RNAAC</a></th>        
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="SERVICE/AGENCY DESIGNATOR CODE">SADC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="MATERIAL SAFETY DATA SHEET IDENTIFIER">MSDS</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
  		<div class="panel panel-default">
   		     <div class="panel-heading">Management</div>
      		 <div class="panel-body">
      <div class="table-responsive">		 	
     <table class="table" id="management">
    <thead>
      <tr>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="MAJOR ORGANIZATIONAL ENTITY">MOE</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="USING SERVICE CODE">USC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="ACQUISITION ADVICE CODE">AAC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="SOURCE OF SUPPLY">SOS</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="UNIT OF ISSUE">UI</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="DOLLAR VALUE, UNIT PRICE">UNIT PRICE</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="QUANTITY PER UNIT PACK">QUP</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="CONTROLLED INVENTORY ITEM CODE">CIIC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="SHELF LIFE CODE">SLC</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="Management Control">MGT CTRL</a></th>
        <th><a href="#" data-toggle="tooltip" data-placement="top" title="EXPENDABILITY-RECOVERABILITY-REPARABILITY CATEGORY CODE">REP</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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
  	
  		<div class="panel panel-default">
   		     <div class="panel-heading">Characteristics</div>
      		 <div class="panel-body">
      		 	  <div class="table-responsive">		 	
     				<table id="table_characateristics" class="table">
     						<tr>
     							<td>SUPPLY PACKAGE TYPE</td>
     							<td></td>
     						</tr>
     						<tr>
     							<td>SPECIAL FEATURES</td>
     							<td></td>
     						</tr>
     					
      				</table>
      		 </div>
  		</div>
  	</div>

  		<div class="panel panel-default">
   		     <div class="panel-heading">Cross Reference</div>
      		 <div class="panel-body">
      		 	 <div class="table-responsive">		 	
     				<table id="table_cross" class="table">
     						<tr>
     							<td>DEFINITION</td>
     							<td>s</td>
     						</tr>
     						
     					
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

