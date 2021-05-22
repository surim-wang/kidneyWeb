<!DOCTYPE html>
<html lang = "en-US">
  <head>
      <title>SYP-HOME</title>
      <meta charset="utf-8">
  </head>
  <body>
<center>
    <h1>Save Your Records & Draw a Graph with your data</h1>
    <ul>
      <p><button><a href="index.php">file Upload</a></button></p>

      <p><button><a href="table.php">show table</a></button></p>

      <form action = "tableOne.php" method="POST" enctype="multipart/form-data">
        <!--<p><input type="text" name="InspectNameText" placeholder="Enter InspectName"/>-->
        <select name="job">
            <option value="WBC">WBC</option>
            <option value="Hb">Hb</option>
            <option value="Creat, U">Creat, U</option>
            <option value="Micro Alb">Micro Alb</option>
        </select>
        <input type="submit" name="submit" value="Select InspectName"/><br>
      </form>

      <p><button><a href="displayImage.php">show images (ALL)</a></button></p>

        <form action = "displayImageOne.php" method="POST" enctype="multipart/form-data">
          <p><input type="text" name="idNo" placeholder="Enter id number"/>
          <input type="submit" name="submit" value="show image (Only ONE)"/><br>
        </form>

      <button><a href="showList.php">image List</a></button>

    </ul>
    </center>
  </body>
</html>
