<html>
  <head>
      <title>Upload Image</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style2.css"> 
  </head>

  <body>
    <header>
      <center>
        <ul>
          <a href="index.php"><button>HOME</button></a>
        </ul>

        <ul>
          <form action = "uploadImage.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="image"/>
            <input type="text" name="desc" placeholder="Enter Description"/>
            <input type="submit" name="Upload" value="Upload Image"/>
          </form>
        </ul>
      </center>
    </header>
  </body>
</html>
