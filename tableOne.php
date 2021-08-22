<html>
  <head>
    <title> Display Image</title>

  </head>
  <body>

    <center>
      <form action="" method="POST" enctype="multipart/form-data">
        <table border = '1'>
          <thead>
            <tr>
              <th>No</th>
              <th>InspectName</th>
              <th>Result</th>
              <th>State</th>
              <th>MinRefValue</th>
              <th>MaxRefValue</th>
              <th>Unit</th>
              <th>Date</th>
            </tr>
          </thead>
          <?php
            //$conn = mysqli_connect("sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"); // "localhost", "root", "123456"
            //$db = mysqli_select_db($conn, 'epiz_29265313_kidney'); // 'opentutorials'
            $conn = mysqli_connect("localhost", "root", "123456");
            $db = mysqli_select_db($conn, 'opentutorials');

            $InspectName = $_POST['job'];
            $query = "SELECT * FROM `medicalrecords` WHERE InspectName = '$InspectName'";
            $query_run = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($query_run))
            {
              ?>
              <tr>
                <td> <?= $row['No'] ?> </td>
                <td> <?= $row['InspectName'] ?> </td>
                <td> <?= $row['Result'] ?> </td>
                <td> <?= $row['State'] ?> </td>
                <td> <?= $row['MinRefValue'] ?> </td>
                <td> <?= $row['MaxRefValue'] ?> </td>
                <td> <?= $row['Unit'] ?> </td>
                <td> <?= $row['Date'] ?> </td>
              </tr>
              <?php
            }           ?>
        </table>
      </form></center>
  </body>
</html>
