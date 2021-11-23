<?php
    $con =new mysqli("localhost","root","","chatbox");  
?>
<?php 
$sql = "SELECT message, date, time FROM messages";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["message"] . $row["date"]. $row["time"]. "<br>";
  }
} else {
  echo "0 results";
}

?>