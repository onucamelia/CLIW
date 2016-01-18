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


    function showProduct(){
var query = getString()['nsn'];
 //alert(query);

$.ajax({
    url:"getProducts",
    type: "GET",
     data:{nsn: query},
    dataType: 'json',
    success:function(data){
        var d=data[0];

        $("#productImage").attr('src',d.IMAGE);
        $("#table_details tr:first-child td:nth-child(2)").html(d.NAME);
        $("#table_details tr:nth-child(2) td:nth-child(2)").html(d.NSN);
        $("#table_details tr:nth-child(3) td:nth-child(2)").html(d.Quantity);

        $("#identification td:first-child").html(d.FIIG);
        $("#identification td:nth-child(2)").html(d.INC);
        $("#identification td:nth-child(3)").html(d.CRITICALY);
        $("#identification td:nth-child(4)").html(d.TYPE_II);
        $("#identification td:nth-child(5)").html(d.DEMIL);
        $("#identification td:nth-child(6)").html(d.DATE);
        $("#identification td:nth-child(7)").html(d.ESD);
        $("#identification td:nth-child(8)").html(d.PMIC);
        $("#identification td:nth-child(9)").html(d.ADPEC);
        $("#identification td:nth-child(10)").html(d.HMIC);
        $("#identification td:nth-child(11)").html(d.HCC);
        $("#identification td:nth-child(12)").html(d.ENAC);

        $("#reference td:first-child").html(d.SUPPLIER);
        $("#reference td:nth-child(2)").html(d.CAGE);
        $("#reference td:nth-child(3)").html(d.PART_NUMBER);
        $("#reference td:nth-child(4)").html(d.STAT);
        $("#reference td:nth-child(5)").html(d.RNCC);
        $("#reference td:nth-child(6)").html(d.RNVC);
        $("#reference td:nth-child(7)").html(d.DAC);
        $("#reference td:nth-child(8)").html(d.RNAAC);
        $("#reference td:nth-child(9)").html(d.SADC);
        $("#reference td:nth-child(10)").html(d.MSDS);

        $("#management td:first-child").html(d.MOE);
        $("#management td:nth-child(2)").html(d.USC);
        $("#management td:nth-child(3)").html(d.AAC);
        $("#management td:nth-child(4)").html(d.SOS);
        $("#management td:nth-child(5)").html(d.UI);
        $("#management td:nth-child(6)").html(d.UNIT_PRICE);
        $("#management td:nth-child(7)").html(d.QUP);
        $("#management td:nth-child(8)").html(d.CIIC);
        $("#management td:nth-child(9)").html(d.SLC);
        $("#management td:nth-child(10)").html(d.MGT_CTRL);
        $("#management td:nth-child(11)").html(d.REP);
        
        $("#table_characateristics tr:first-child td:nth-child(2)").html(d.SUPPLY_PACKAGE_TYPE);
        $("#table_characateristics tr:nth-child(2) td:nth-child(2)").html(d.SPECIAL_FEATURES);

        $("#table_cross td:nth-child(2)").html(d.DEFINITION);
    }
});
    }
    showProduct();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
