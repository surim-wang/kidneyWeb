

<?php

$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');


if(isset($_POST['Upload']))
{
  $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
var_dump($_FILES);
var_dump($_FILES['image']);
var_dump($_FILES['image']['tmp_name']);
  $desc = $_POST['desc'];

  $query = "INSERT INTO `photo`(`image`, `desc`) VALUES ('$file', '$desc')";
  $query_run = mysqli_query($conn, $query);

var_dump($query_run);



  if($query_run)
  {
    echo '<script type= "text/javascript"> alert("Image Profile Uploaded") </script>';
  } else {
    echo '<script type= "text/javascript"> alert("Image Profile Not Uploaded") </script>';
  }
}
?>
