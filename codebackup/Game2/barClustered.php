<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/serial.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js"></script>
        <script src="/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/amcharts/serial.js" type="text/javascript"></script>
         <script>window.onkeypress = function(event) {
   if (event.keyCode == 49) {
    alert("asd");
     addval(10,20);
   }
}</script>
        <script>
var a;
var b;
var chart;
var initi=0;

function initval(){

a=0;
b=0;

}

initval();

function addval(){
 var rand=Math.floor((Math.random() * 2)+1);

 if(rand==1){
  if(initi==0){

  a=a+0;
  initi=initi+1;
}
else{a=a+1;}
}
  else if(rand==2) {if(initi==0){

  b=b+0;
  initi=initi+1;
}
    
   else{ b=b+1;}
 
  }


draw(a,b);

}

addval();


  

</script>


        <script>
            

            
function draw(a,b){
   var chartData = [
                {
                    "year": 2005,
                    "income":a,
                   
                },
                {
                    "year": 2006,
                    "income": b,
                    
                }
            ];
     
if (AmCharts.isReady) {
          
                // SERIAL CHART
              var  chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "year";
                chart.startDuration = 1;
                chart.plotAreaBorderColor = "#DADADA";
                chart.plotAreaBorderAlpha = 1;
                // this single line makes the chart a bar chart
                chart.rotate = true;

                // AXES
                // Category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridAlpha = 0.1;
                categoryAxis.axisAlpha = 0;

                // Value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.gridAlpha = 0.1;
                valueAxis.position = "top";
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Income";
                graph1.valueField = "income";
                graph1.balloonText = "Income:[[value]]";
                graph1.lineAlpha = 0;
                graph1.fillColors = "#ADD981";
                graph1.fillAlphas = 1;
                chart.addGraph(graph1);

                // second graph
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "column";
                graph2.title = "Expenses";
                graph2.valueField = "expenses";
                graph2.balloonText = "Expenses:[[value]]";
                graph2.lineAlpha = 0;
                graph2.fillColors = "#81acd9";
                graph2.fillAlphas = 1;
                chart.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                chart.addLegend(legend);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("chartdiv");
            ;}}
        </script>
    </head>

    <body>
        <div id="chartdiv" style="width:500px; height:600px;"></div>
         <button  type ="button" id="buyLetter" onClick="addval()">Let em Play! [ 1 ] </button>  
    </body>

</html>