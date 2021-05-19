
<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Upload Image</title>
    <meta charset="utf-8">
</head>

<body>
  <?php if(!empty($statusMsg)){ ?>
      <p class="status-msg"><?= $statusMsg; ?></p>
  <?php } ?>
  <form action = "upload.php" method="post" enctype="multipart/form-data">
      Select Image File to Upload;
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>



</body>
</html>
