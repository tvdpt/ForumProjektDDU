<html>
<body>
<?php include 'menu.php';?>
<?php

if (true) {

 include 'DBconnection.php';
 

 $sql = "SELECT TopicName  FROM Topic ORDER BY id asc;";
 $result = $conn->query($sql);

echo "<h1> Welcome to MusicDizc </h1>";
echo "<h3> This is were upcomming music artist can share their work, to be discovvered, and reach the top </h3>";
echo "<h3> Please select wich topic you wanna discover </h3> <br>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["TopicName"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

}
?>







</body>
</html>