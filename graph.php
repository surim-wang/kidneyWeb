<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');
$InspectName = $_POST['draw'];
$query = "SELECT * FROM `medicalrecords` WHERE InspectName = '$InspectName'";
$result = mysqli_query($conn, $query);
?>

<html lang = "en">
  <head>
    <meta charset='utf-8'>
    <title>Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      //\google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Result', 'MinRefValue', 'MaxRefValue'],
          ['2013-03-11',0, 0, 0],
          <?php
              if(mysqli_num_rows($result)>0){

                  while($row= mysqli_fetch_array($result)){
                      #echo "['".$row['Date']."', 0,0,0],";
                      echo "['".substr($row['Date'],0,10)."', '".$row['Result']."', '".$row['MinRefValue']."', '".$row['MaxRefValue']."'],";
                  }
              }
          ?>
         ]);
        var options = {
          chart: {
            title:  'titleInspect',
            subtitle: 'sub title',
            }
        };

        //var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        //chart.draw(data, google.charts.Bar.convertOptions(options));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--<div id="columnchart_material" style="width: 1350px; height: 700px;"></div>-->
    <div id="curve_chart" style="width: 1350px; height: 500px;"></div>
    <div>
      <p><a href="home.php"><button>HOME</button></a></p>
    </div>

    <form action = "graph.php" method="POST" enctype="multipart/form-data">
      <?php
        $conn = mysqli_connect("localhost", "root", "123456");
        $db = mysqli_select_db($conn, 'opentutorials');
        $query = "SELECT distinct InspectName FROM `medicalrecords` ";
        $query_run = mysqli_query($conn, $query);
        ?>
          <select name="draw">
          <?php while($row = mysqli_fetch_array($query_run)){?>
            <option ><?=$row[0]?></option>
          <?php } ?>
          </select>
        <input type="submit" name="submit" value="draw graph with InspectName"/><br>
    </form>

  </body>
</html>
