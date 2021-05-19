<?php
// Include the database configuration file
include 'dbConfig.php';

$query = "SELECT * FROM images WHERE id=1";
$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result)){
  //print list
?>

  echo 'file_name : ';
  print_r($row['file_name']);
  echo '<br>';
  echo '<img src="data:image;base64,'.base64_encode( $row['uploaded_on'] ).'"/>';
<?php
};
 ?>
