<?php
include 'connect-db.php';
class addProduct extends Controller{
 public function index()
	{
		$this->view('addProduct/index');
		$this->model('Item');
		$file=$image=$nameForm=$nsnForm=$quantityForm =$fiigForm =$incForm = $criticallyVal =$criticallyForm=$criticallyForm=$type_iiForm =$demilForm =$dateForm =$esdForm =$pmicForm = $adpecForm =$hmicForm =$hccForm =$enacForm=$suplierVal = $supplierForm=$cageForm =$part_numberForm =$statForm =$rnccForm =$rnvcForm =$dacForm =$rnaacForm = $sadcForm =$msdsForm = $moeForm = $uscForm =$aacForm = $sosForm = $uiForm =$unit_priceForm = $qupForm =$ciicForm =$slcForm =$mgt_ctrlForm =$repForm =$supply_package_typeForm =$special_featuresForm =$definitionForm="";
       

        move_uploaded_file($_FILES['image']['tmp_name'],"images/products/" . $_FILES["image"]["name"]);
        $file="images/products".$_FILES['image']['name'];
        if(!empty($_POST["nameForm"]))
		{
			$nameForm = $_POST["nameForm"];
		}
		if(!empty($_POST["nsnForm"]))
		{
			$nsnForm = $_POST["nsnForm"];
		}
		if(!empty($_POST["quantityForm"]))
		{
			$quantityForm = $_POST["quantityForm"];
		}
		if(!empty($_POST["fiigForm"]))
		{
			$fiigForm = $_POST["fiigForm"];
		}
		if(!empty($_POST["incForm"]))
		{
			$incForm = $_POST["incForm"];
		}
		if(!empty($_POST["criticallyForm"]))
		{
		$criticallyVal = $_POST['criticallyForm'];
		if($criticallyVal=='YES')
			 $criticallyForm="student";
		else if($criticallyVal=='NO')
			 $criticallyForm="masterand";
		}
			if(!empty($_POST["type_iiForm"]))
		{
			$type_iiForm = $_POST["type_iiForm"];
		}
			if(!empty($_POST["demilForm"]))
		{
			$demilForm = $_POST["demilForm"];
		}
			if(!empty($_POST["dateForm"]))
		{
			$dateForm = $_POST["dateForm"];
		}
			if(!empty($_POST["esdForm"]))
		{
			$esdForm = $_POST["esdForm"];
		}
			if(!empty($_POST["pmicForm"]))
		{
			$pmicForm = $_POST["pmicForm"];
		}
			if(!empty($_POST["adpecForm"]))
		{
			$adpecForm = $_POST["adpecForm"];
		}
			if(!empty($_POST["hmicForm"]))
		{
			$hmicForm = $_POST["hmicForm"];
		}
			if(!empty($_POST["hccForm"]))
		{
			$hccForm = $_POST["hccForm"];
		}
			if(!empty($_POST["enacForm"]))
		{
			$enacForm = $_POST["enacForm"];
		}
			if(!empty($_POST["supplierForm"]))
		{
			$suplierVal = $_POST['supplierForm'];
			if($suplierVal=="Defense Supply Agency")
			 	$supplierForm="Defense Supply Agency";
			else if($suplierVal=='United States Dept of Agriculture')
			 	$supplierForm="United States Dept of Agriculture";
		}
			if(!empty($_POST["cageForm"]))
		{
			$cageForm = $_POST["cageForm"];
		}
			if(!empty($_POST["part_numberForm"]))
		{
			$part_numberForm = $_POST["part_numberForm"];
		}
			if(!empty($_POST["statForm"]))
		{
			$statForm = $_POST["statForm"];
		}
			if(!empty($_POST["rnccForm"]))
		{
			$rnccForm = $_POST["rnccForm"];
		}
			if(!empty($_POST["rnvcForm"]))
		{
			$rnvcForm = $_POST["rnvcForm"];
		}
			if(!empty($_POST["dacForm"]))
		{
			$dacForm = $_POST["dacForm"];
		}
			if(!empty($_POST["rnaacForm"]))
		{
			$rnaacForm = $_POST["rnaacForm"];
		}
			if(!empty($_POST["sadcForm"]))
		{
			$sadcForm = $_POST["sadcForm"];
		}
			if(!empty($_POST["msdsForm"]))
		{
			$msdsForm = $_POST["msdsForm"];
		}
			if(!empty($_POST["moeForm"]))
		{
			$moeForm = $_POST["moeForm"];
		}
			if(!empty($_POST["uscForm"]))
		{
			$uscForm = $_POST["uscForm"];
		}
			if(!empty($_POST["aacForm"]))
		{
			$aacForm = $_POST["aacForm"];
		}
			if(!empty($_POST["sosForm"]))
		{
			$sosForm = $_POST["sosForm"];
		}
			if(!empty($_POST["uiForm"]))
		{
			$uiForm = $_POST["uiForm"];
		}
 
 			if(!empty($_POST["unit_priceForm"]))
		{
			$unit_priceForm = $_POST["unit_priceForm"];
		}
 
 			if(!empty($_POST["qupForm"]))
		{
			$qupForm = $_POST["qupForm"];
		}
 
 			if(!empty($_POST["ciicForm"]))
		{
			$ciicForm = $_POST["ciicForm"];
		}
 
 			if(!empty($_POST["slcForm"]))
		{
			$slcForm = $_POST["slcForm"];
		}
			if(!empty($_POST["mgt_ctrlForm"]))
		{
			$mgt_ctrlForm = $_POST["mgt_ctrlForm"];
		}
			if(!empty($_POST["repForm"]))
		{
			$repForm = $_POST["repForm"];
		}
			if(!empty($_POST["supply_package_typeForm"]))
		{
			$supply_package_typeForm = $_POST["supply_package_typeForm"];
		}
			if(!empty($_POST["special_featuresForm"]))
		{
			$special_featuresForm = $_POST["special_featuresForm"];
		}
			if(!empty($_POST["definitionForm"]))
		{
			$definitionForm = $_POST["definitionForm"];
		}
$sql= "INSERT INTO item VALUES ('$file','$nameForm', '$nsnForm', '$quantityForm','$fiigForm', '$incForm', 'criticallyForm','$type_iiForm', '$demilForm', '$dateForm', '$esdForm', '$pmicForm', '$adpecForm', 'hmicForm','hccForm','$enacForm', '$supplierForm', '$cageForm', '$part_numberForm', '$statForm', '$rnccForm', '$rnvcForm', '$dacForm', '$rnaacForm', '$sadcForm', '$msdsForm', '$moeForm', '$uscForm', '$aacForm', '$sosForm', '$uiForm', '$unit_priceForm', '$qupForm', '$ciicForm', '$slcForm', '$mgt_ctrlForm', '$repForm','supply_package_typeForm', '$special_featuresForm', '$definitionForm')";
  mysql_query($sql);
 }
}
?>
