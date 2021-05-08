<!DOCTYPE html>
<html>
    >
  <head>
    <?php
      include 'Admin.php';
      ?>
      <style>
        
  #container {
  width: 100%;
  height: 100%;
 margin-left: 350px;
        margin-top: 250px;
  padding: 0;
}
        </style>
      <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
  </head>
  <body>
    <div id="container" style="width: 100%; height: 100%"></div>
    <script>
      
        
anychart.onDocumentReady(function() {

  // set the data
  var data = [
      {x: "Package 1", value: 500},
      {x: "Package 2", value: 600},
      {x: "Package 3", value: 900}
      
  ];

  // create the chart
  var chart = anychart.pie();

  // set the chart title

  // add the data
  chart.data(data);

  // display the chart in the container
  chart.container('container');
  chart.draw();

});
        
    </script>
  </body>
</html>