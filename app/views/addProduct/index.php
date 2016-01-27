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
          <div class="panel-heading"><button type="button" class="btn btn-link">Modify quantity</button></div>
          <div class="panel-body">
	<form action="addProduct" id="formregister" method="POST" enctype="multipart/form-data">
        <fieldset class="form-group">
       <p>File:<input type="file" name="image"></p>
    </fieldset>

    <fieldset class="form-group">
   		 <label for="nameForm">Name</label>
   		 <input type="text" class="form-control" id="nameForm" name="nameForm"  placeholder="Name">
   	</fieldset>
  	<fieldset class="form-group">
    	<label for="nsnForm">NSN</label>
    	<input type="text" class="form-control" id="nsnForm" name="nsnForm" placeholder="NSN">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="quantityForm">Quantity</label>
    	<input type="number" class="form-control" id="quantityForm"  name="quantityForm" placeholder="Quantity">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="fiigForm">FIIG</label>
    	<input type="text" class="form-control" id="fiigForm" name="fiigForm"  placeholder="FIIG">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="incForm">INC</label>
    	<input type="number" class="form-control" id="incForm" name="incForm" placeholder="INC">
  	</fieldset>
  	<fieldset class="form-group">
   		<label for="criticallyForm">Critically</label>
   		<select class="form-control" id="criticallyForm" name="criticallyForm" >
     		 <option>YES</option>
     		 <option>NO</option>
      	</select>
  	</fieldset>
	<fieldset class="form-group">
    	<label for="type_iiForm">Type_II</label>
    	<input type="number" class="form-control" id="type_iiForm" name="type_iiForm"   placeholder="Type_II">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="demilForm">Demil</label>
    	<input type="text" class="form-control" id="demilForm"  name="demilForm" placeholder="Demil">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="dateForm">Date</label>
    	<input type="date" class="form-control" id="dateForm" name="dateForm"  placeholder="YY-MM-DD">
  	</fieldset>
  	 <fieldset class="form-group">
    	<label for="esdForm">ESD</label>
    	<input type="text" class="form-control" id="esdForm"  name="esdForm" placeholder="ESD">
  	</fieldset>
    <fieldset class="form-group">
    	<label for="pmicForm">PMIC</label>
    	<input type="text" class="form-control" id="pmicForm" name="pmicForm" placeholder="PMIC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="adpecForm">ADPEC</label>
    	<input type="number" class="form-control" id="adpecForm" name="adpecForm"  placeholder="ADPEC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="hmicForm">HMIC</label>
    	<input type="text" class="form-control" id="hmicForm" name="hmicForm"  placeholder="HMIC">
  	</fieldset>
    <fieldset class="form-group">
      <label for="hmicForm">HCC</label>
      <input type="text" class="form-control" id="hccForm" name="hccForm"  placeholder="HCC">
    </fieldset>
  	<fieldset class="form-group">
    	<label for="enacForm">ENAC</label>
    	<input type="text" class="form-control" id="enacForm" name="enacForm"  placeholder="ENAC">
  	</fieldset>
  	<fieldset class="form-group">
   		<label for="supplierForm">Supplier</label>
   		<select class="form-control" id="supplierForm" name="supplierForm">
     		 <option>Defense Supply Agency</option>
     		 <option>United States Dept of Agriculture</option>
      	</select>
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="cageForm">Cage</label>
    	<input type="number" class="form-control" id="cageForm" name="cageForm"  placeholder="Cage">
  	</fieldset>
	<fieldset class="form-group">
    	<label for="part_numberForm">Part Number</label>
    	<input type="text" class="form-control" id="part_numberForm"  name="part_numberForm" placeholder="Part Number">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="statForm">Stat</label>
    	<input type="text" class="form-control" id="statForm" name="statForm"  placeholder="Stat">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="rnccForm">RNCC</label>
    	<input type="number" class="form-control" id="rnccForm" name="rnccForm"   placeholder="RNCC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="rnvcForm">RNVC</label>
    	<input type="number" class="form-control" id="rnvcForm"  name="rnvcForm" placeholder="RNVC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="dacForm">DAC</label>
    	<input type="number" class="form-control" id="dacForm" name="dacForm"  placeholder="DAC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="rnaacForm">RNAAC</label>
    	<input type="text" class="form-control" id="rnaacForm" name="rnaacForm"  placeholder="RNAAC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="sadcForm">SADC</label>
    	<input type="text" class="form-control" id="sadcForm" name="sadcForm"  placeholder="SADC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="msdsForm">MSDS</label>
    	<input type="text" class="form-control" id="msdsForm" name="msdsForm"   placeholder="MSDS">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="moeForm">MOE</label>
    	<input type="text" class="form-control" id="moeForm" name="moeForm"  placeholder="MOE">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="uscForm">USC</label>
    	<input type="text" class="form-control" id="uscForm"  name="uscForm"  placeholder="USC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="aacForm">AAC</label>
    	<input type="text" class="form-control" id="aacForm" name="aacForm"  placeholder="AAC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="sosForm">SOS</label>
    	<input type="text" class="form-control" id="sosForm"  name="sosForm"  placeholder="SOS">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="uiForm">UI</label>
    	<input type="text" class="form-control" id="uiForm" name="uiForm"  placeholder="UI">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="unit_priceForm">Unit Price</label>
    	<input type="number" class="form-control" id="unit_priceForm" name="unit_priceForm"  placeholder="Unit Price">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="qupForm">QUP</label>
    	<input type="number" class="form-control" id="qupForm" name="qupForm"  placeholder="QUP">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="ciicForm">CIIC</label>
    	<input type="text" class="form-control" id="ciicForm" name="ciicForm"  placeholder="CIIC">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="slcForm">SLC</label>
    	<input type="number" class="form-control" id="slcForm" name="slcForm"  placeholder="SLC">
  	</fieldset>
  		<fieldset class="form-group">
    	<label for="mgt_ctrlForm">MGT CTRL</label>
    	<input type="text" class="form-control" id="mgt_ctrlForm" name="mgt_ctrlForm"  placeholder="MGT CTRL">
  	</fieldset>
  	<fieldset class="form-group">
    	<label for="repForm">REP</label>
    	<input type="text" class="form-control" id="repForm" name="repForm"  placeholder="REP">
  	</fieldset>
	<fieldset class="form-group">
   		<label for="supply_package_typeForm">Supply Package Type</label>
   		<select class="form-control" id="supply_package_typeForm" name="supply_package_typeForm" >
     		 <option>Fruits and Vegetables</option>
     		 <option>Bakery and Cereal Products</option>
     		  <option>Special Dietary Foods and Food Specialty Preparations</option>
        </select>
  	</fieldset>
 	<fieldset class="form-group">
    	 <label for="special_featuresForm">Special Features</label>
   	     <textarea class="form-control" id="special_featuresForm" name="special_featuresForm"  rows="3"></textarea>
    </fieldset>
   <fieldset class="form-group">
   		 <label for="definitionForm">Definition</label>
   		 <textarea class="form-control" id="definitionForm" name="definitionForm" rows="3"></textarea>
  </fieldset>



 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>

</div>
</div>
	</content>
	<footer></footer>
</body>
</html>
