
$(document).ready(function(){
    function showSoldiers(){
$.ajax({
    url:"getSoldiers",
    dataType: 'json',
    success:function(data){
     var d=data;


   $.getJSON('getSoldiers', function(data) {
        $.each(data, function(index) {
          var nameID="soldier"+index;
           $("<div id="+nameID+"></div>").appendTo(".soldiers");
           $("#"+nameID).attr('class',"col-md-4");
           $("#"+nameID).html("<img id='itemImage"+nameID+"'>"+"<p>"+data[index].name+"</p>");
           $("#itemImage"+nameID).attr('class',"img-responsive");
           $("#itemImage"+nameID).attr('src',data[index].image);
      
      $("#itemImage"+nameID).click(function() {
             window.location.href = 'http://localhost/mvc/public/soldier?serviceNumber='+data[index].service_number;
          });
        });
    })





    }
});
    }
    showSoldiers();
});
