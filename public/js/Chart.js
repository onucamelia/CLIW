google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
$.ajax({
    url:"getProduct",
    dataType: 'json',
    success:function(data){
     var arrayChart = new google.visualization.DataTable();

     arrayChart.addColumn('string', 'Products');
     arrayChart.addColumn('number', 'Quantity');
     arrayChart.addColumn({type: 'string', role: 'style'});
        $.each(data, function(index) {
          //alert(data[index].Quantity);
          var name=data[index].NAME;
          var value=Number(data[index].Quantity);
         if(value>=50)
            arrayChart.addRows([ [name, value, 'color: green' ]]);
          else if(value<50 && value>=10 )
            arrayChart.addRows([ [name, value, 'color: yellow' ]]);
          else if(value<10)
            arrayChart.addRows([ [name, value, 'color: red' ]]);
        
          
        });

    

  /*    var data = google.visualization.arrayToDataTable([
        ['Product', 'Quantity',],
        ['BEANS,LIMA,DRY', 20],
        ['Meatballs In Marinara Sauce', 10],
        ['Cobbler,Cherry Blueberry', 36],
        
      ]);
*/
      var options = {
        title: 'Quantity of the products',
        chartArea: {width: '80%'},
        hAxis: {
          title: 'Total Quantity',
          minValue: 0
        },
        vAxis: {
          title: 'Item'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(arrayChart, options);
         }
});
    }
    




