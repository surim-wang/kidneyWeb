<?php
$conn = mysqli_connect("127.0.0.1", "root", "123456");
$db = mysqli_select_db($conn, 'opentutorials');

$query = "SELECT * FROM `medicalrecords` WHERE InspectName = 'Hb'";
$result = mysqli_query($conn, $query);
//if($result){
//  echo "Conn";
//}
?>

<?php
if(mysqli_num_rows($result)>0){
  while($row= mysqli_fetch_array($result)){
    echo "['".$row['Date']."', '".$row['Result']."', '".$row['MinRefValue']."', '".$row['MaxRefValue']."'],";
  }
}
?>
