$.ajaxSetup({cache: false})
$.get('comparare', function (data) {
	//alert(data);
    if(data!='NO')
  {
  $("#admin-hello").html(data);
  }
  else 
  {
     window.location.href="login";
    }
  
});