<html>
  <head>
    <title>  IMAGE LIST</title>
  </head>

<body>
  
    <center>
    <div>
      <p><a href="index.php"><button>HOME</button></a></p>
    </div>
      <?php
      //$conn = mysqli_connect("sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"); // "localhost", "root", "123456"
      //$db = mysqli_select_db($conn, 'epiz_29265313_kidney'); // 'opentutorials'
      $conn = mysqli_connect("127.0.0.1", "root", "123456");
      $db = mysqli_select_db($conn, 'opentutorials');

      $query = "SELECT * FROM photo";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_array($result)){
        //print list
        echo 'image_id : ';
        print_r($row['id']);
        echo '<br>';
      };
      ?>
      <div>
        <p><a href="displayImage.php"><button>SHOW ALL</button></a></p>
      </div>

      <form action = "displayImageOne.php" method="POST" enctype="multipart/form-data">
        <p><input type="text" name="idNo" placeholder="Enter id number"/>
        <input type="submit" name="submit" value="show image (Only ONE)"/><br>
      </form>

    </center>
  </body>
</html>
