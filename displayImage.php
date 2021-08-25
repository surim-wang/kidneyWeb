<html>
  <head>
    <title> Display Image</title>

  </head>
  <body>
    <div>
      <p><a href="index.php"><button>HOME</button></a></p>
    </div>
    <center>
      <form action="" method="POST" enctype="multipart/form-data">
        <table border = '1'>
          <thead>
            <tr>
              <th>ID</th>
              <th>IMAGE</th>
              <th>DESC</th>
            </tr>
          </thead>
          <?php
            //$conn = mysqli_connect("sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"); // "localhost", "root", "123456"
            //$db = mysqli_select_db($conn, 'epiz_29265313_kidney'); // 'opentutorials'
            $conn = mysqli_connect("localhost", "root", "123456");
            $db = mysqli_select_db($conn, 'opentutorials');


            $query = "SELECT * FROM `photo`";
            $query_run = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($query_run))
            {
              ?>
              <tr>
                <td> <?= $row[0] ?> </td>
                <td> <?= '<img src="data:image;base64,'.base64_encode($row['image']).'" alt ="Image" style="width: 1000px">' ?> </td>
                <td> <?= $row['desc'] ?> </td>
              </tr>

              <?php
            }
           ?>
        </table>
      </form></center>
  </body>
</html>
