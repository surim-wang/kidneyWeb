<?php

$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');


$query = "SELECT * FROM photo";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
  //print list
  echo 'image_id : ';
  print_r($row['id']);
  echo '<br>';

  //var_dump($row);
};
?>
<div>
    <ul class="nav navbar-nav">
        <li><a href="displayImage.php"><button>$row['id']</button></a></li>
    </ul>
</div>
