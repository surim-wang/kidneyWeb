<!DOCTYPE html>
<html lang = "en-US">
  <head>
      <title>SYP-HOME</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  </head>
  <body>
    <div class="container">
      <header>
      <nav>
          <ul>
            <li><a href="upload.php">FILE UPLOAD</a></li>      <!-- 1  -->
            <li><a href="table.php">TABLES</a></li>           <!-- 2  -->
            <li><a href="tableOne.php">table</a></li>           <!-- 3  -->
            <li><a href="graph.php">graph</a></li>         <!-- 4  -->
            <li><a href="displayImage.php">IMAGES</a></li>        <!-- 5  -->
            <li><a href="displayImageOne.php">image</a></li>         <!-- 6  -->
            <li><a href="showList.php">IMAGE LIST</a></li>    <!-- 7  -->
          </ul>
        </nav>
      </header>
    </div>
<center>
    <!-- <h1> Save Your Records & Draw a Graph with your data </h1> -->
    <ul> 
      <!-- 1  -->
      <!--   
    <h2> FILE UPLOAD </h2>
      <p><button><a href="upload.php">file Upload</a></button></p>
      --> 
      <!-- 2  -->
      <!--   
    <h2> TABLES </h2>
      <p><button><a href="table.php">show table</a></button></p>
      -->
      <!-- 3  -->
    <h2> Table </h2>
      <form action = "tableOne.php" method="POST" enctype="multipart/form-data">
        <?php
          $conn = mysqli_connect("localhost", "root", "123456"); // "sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"
          $db = mysqli_select_db($conn, 'opentutorials'); // 'epiz_29265313_kidney'
          $query = "SELECT distinct InspectName FROM `medicalrecords` ";
          $query_run = mysqli_query($conn, $query);
          ?>
            <select name="job">
            <?php while($row = mysqli_fetch_array($query_run)){?>
              <option ><?=$row[0]?></option>
            <?php } ?>
            </select>
          <input type="submit" name="submit" value="Select InspectName"/><br>
      </form>
      <!-- 4  -->          
    <h2> GRAPH </h2>
      <form action = "graph.php" method="POST" enctype="multipart/form-data">
        <?php
          $conn = mysqli_connect("localhost", "root", "123456"); // "sql205.epizy.com", "epiz_29265313", "ZOkyx8KJmsYtf9u"
          $db = mysqli_select_db($conn, 'opentutorials'); // 'epiz_29265313_kidney' 
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
      <!-- 5  -->
      <!-- 
    <h2> IMAGES </h2>
      <p><button><a href="displayImage.php">show images (ALL)</a></button></p>
     -->
      <!-- 6  -->
    <h2> IMAGE </h2>
        <form action = "displayImageOne.php" method="POST" enctype="multipart/form-data">
          <p><input type="text" name="idNo" placeholder="Enter id number"/>
          <input type="submit" name="submit" value="show image (Only ONE)"/><br>
        </form>
     <!-- 7  -->
     <!-- 
    <h2> IMAGE LIST </h2>
      <button><a href="showList.php">image List</a></button>
     -->         
    </ul>
    </center>
  </body>
</html>
