
$(document).ready(function(){
    function showProducts(){
$.ajax({
    url:"getProduct",
    dataType: 'json',
    success:function(data){
     var d=data;

      

 /*    $.each(d, function(index) {  
      $("<div class='col-md-4'></div>").appendTo(".products");
      
     $('<p>'+d[index].NAME+'</p>').appendTo(".products .col-md-4");
      $('<p>'+index+'</p>').appendTo(".products .col-md-4");
    
       $("<img class='itemImage'>").appendTo(".products .col-md-4");
       $(".itemImage").attr('src',d[index].IMAGE);


$(".itemImage").click(function() {
    window.location.href = 'http://localhost/mvc/public/product?nsn='+d[index].NSN;
});


     

});*/

   $.getJSON('getProduct', function(data) {
        $.each(data, function(index) {
          var nameID="product"+index;
           $("<tr id="+nameID+"></tr>").appendTo("#table-products");
           ///  $("#"+nameID).attr('class',"col-md-4");
           // $("<div id='col-md-4-'></div>").appendTo(".products");
         //  $("#"+nameID).html('<p>'+data[index].NAME+'</p>');

         $("<td></td>").appendTo("#"+nameID);
         $("<td></td>").appendTo("#"+nameID);
         $("<td></td>").appendTo("#"+nameID);
         $("<td></td>").appendTo("#"+nameID);

          $("#"+nameID+" td:first-child").html("<img class='itemImage"+nameID+"'>");
          $(".itemImage"+nameID).attr('src',data[index].IMAGE);
          $(".itemImage"+nameID).click(function() {
             window.location.href = 'http://localhost/mvc/public/product?nsn='+data[index].NSN;
          });
           $(".itemImage"+nameID).attr('class',"itemImage");
          // $(".itemImage"+nameID).attr('class',"img-responsive");

            $("#"+nameID+" td:nth-child(2)").html("<p>"+data[index].NAME+"</p>");
            $("#"+nameID+" td:nth-child(3)").html("<p>"+data[index].Quantity+"</p>");
            $("#"+nameID+" td:nth-child(4)").html("<p>"+data[index].SUPPLY_PACKAGE_TYPE+"</p>"); 

        });
    })





    }
});
    }
    showProducts();
});
