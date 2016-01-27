
  $(function() {
    $( "#date_of_birthForm" ).datepicker();
  });
	 function register(){
var nin = document.getElementById("ninForm").value;
var name= $("#nameForm").val();
var nationalityForm= $("#nationalityForm option:selected").val();
//Nationality+first 2 lettres from the name+the last 2 letters from the nin+ '*'+ the first 2 letters from the nin
var id=nationalityForm+name.substring(0,2)+nin.slice(-2)+'*'+nin.slice(0,2);
//alert(id);
new QRCode(document.getElementById("qrcode"), id);

    }
