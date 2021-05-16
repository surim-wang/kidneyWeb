<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '123456',
  'opentutorials');
  // 1 row
echo  '<h1>single row</h1>';
$sql= "SELECT * FROM topic WHERE id = 11 LIMIT 1000";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];
// all row
$sql= "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}

 ?>
