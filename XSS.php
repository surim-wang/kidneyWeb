<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XSS</title>
  </head>
  <body>
    <h1>Cross Site Scripting</h1>
    <?php
      echo htmlspecialchars('<script>alert("babo");</script>');
     ?>
  </body>
</html>
