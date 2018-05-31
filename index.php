<?php
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "test");
$result = mysqli_query($conn, "SELECT * FROM party WHERE party = 1123");

while( $row = mysqli_fetch_assoc($result)){
  echo $row['UID'];
  echo " ";
  echo $row['party'];
  echo "<br/>";
}
?>


<!DOCTYPE html>
<br>Completed on KST 2018-5-31 02:27
