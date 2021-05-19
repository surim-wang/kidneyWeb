
<?php
// Include the database configuration file
include 'dbConfig.php';

$query = "SELECT * FROM photo";
$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result)){
  //print list
  echo 'file_name : ';
  print_r($row['']);
  echo '<br>';
  //var_dump($row);
};



//이미지 보여주는 소스

//var_dump($result);
//var_dump(Header(  "Content-type:  Image/jpg"));
#echo $row[uploaded_on];
//mysql_close();
