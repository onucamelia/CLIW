$.ajaxSetup({cache: false})
$.get('comparare', function (data) {
    if(data!='NO')
  {
    var session = data;
  $("#admin-hello").html(data);
  }
  else 
  {
     
     window.location.href="login";
    }
  
});