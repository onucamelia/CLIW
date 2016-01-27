$(document).ready(function(){

function getString()
{
var vars = [], hash;
var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
for(var i = 0; i < hashes.length; i++)
{
    hash = hashes[i].split('=');
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
}
return vars;
}


    function showSoldier(){
var query = getString()['serviceNumber'];
 //alert(query);

$.ajax({
    url:"getSoldier",
    type: "GET",
     data:{serviceNumber: query},
    dataType: 'json',
    success:function(data){
        var d=data[0];

        $("#soldierImage").attr('src',d.image);
        $("#table_details tr:first-child td:nth-child(2)").html(d.name);
        $("#table_details tr:nth-child(2) td:nth-child(2)").html(d.service_number);
        $("#table_details tr:nth-child(3) td:nth-child(2)").html(d.rank);

        $("#identification td:first-child").html(d.unit);
        $("#identification td:nth-child(2)").html(d.date_of_birth);
        $("#identification td:nth-child(3)").html(d.nationality);
        $("#identification td:nth-child(4)").html(d.branch);
        
    }
});
    }
    showSoldier();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
