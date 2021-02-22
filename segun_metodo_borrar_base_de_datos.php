<?php
//Borrar BBDD  cambia el servername username y passsword a los datos de tu mysql
$servername = 51.124.40.229;
$username = "javier";
$password = "eepmadrid";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DROP DATABASE $dbname";
if (mysqli_query($conn, $sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>