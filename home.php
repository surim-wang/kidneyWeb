<!DOCTYPE html>
<html lang = "en-US">
  <head>
      <title>HOME</title>
      <meta charset="utf-8">
  </head>
  <body>
    <h1>MENU</h1>
    <ul>
      <li><button><a href="index.php">file Upload</a></button></li>
      <li><button><a href="displayImage.php">show images (ALL)</a></button></li>

      <li><button><a href="displayImageOne.php">show image (Only ONE)</a></button></li>
      <form action = "displayImageOne.php" method="POST" enctype="multipart/form-data">
        <label>Enter id number: </label>
        <input type="text" name="idNo" placeholder="Enter id number"/><br>
        <input type="submit" name="submit" value="show image (Only ONE)"/><br>
      </form>

      <li><button><a href="showList.php">image List</a></button></li>
    </ul>
  </body>
</html>
