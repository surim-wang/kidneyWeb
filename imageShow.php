
<?php
// Include the database configuration file
include 'dbConfig.php';

$select_query = "SELECT * FROM images";
$result = mysqli_query($db, $select_query);

while($row = mysqli_fetch_array($result)){
  echo 'file_name : ';
  print_r($row['file_name']);
  echo '<br>';
};// until here, print image List

?>
