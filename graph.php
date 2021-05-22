<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');

$query = "SELECT * FROM `medicalrecords` WHERE InspectName = 'Hb'";
$result = mysqli_query($conn, $query);
//if($result){
//  echo "Conn";
//}
?>


<html lang = "en">
  <head>
    <meta charset='utf-8'>
    <title>document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Result', 'MinRefValue', 'MaxRefValue'],
          <?php
              if(mysqli_num_rows($result)>0){
                  while($row= mysqli_fetch_array($result)){
                      echo "['".$row['Date']."', '".$row['Result']."', '".$row['MinRefValue']."', '".$row['MaxRefValue']."'],";
                  }
              }
          ?>
           //['2014', 1000, 400, 200],
           //['2015', 1170, 460, 250],
           //['2016', 660, 1120, 300],
           //['2017', 1030, 540, 350]
         ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
