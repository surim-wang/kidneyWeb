<html>
  <head>
      <title>Upload Image</title>
      <meta charset="utf-8">
  </head>

  <body>
    <center>
    <h1>Upload image</h1>
      <form action = "uploadImage.php" method="POST" enctype="multipart/form-data">

        <p><label>Select Image File to Upload: </label>
        <input type="file" name="image" id="image" /></p>

        <p><label>Enter description: </label>
        <input type="text" name="desc" placeholder="Enter Description"/></p>

        <input type="submit" name="Upload" value="Upload Image"/><br>

      </form>
  </center>
  </body>
</html>
