<?php
//modificacion de objeto cambia el servername username y passsword a los datos de tu mysql
$servername = 51.124.40.229;
$username = "javier";
$password = "eepmadrid";
$dbname = $_POST['BBDD'];
$id= $_POST['id'];
$campo = $_POST['campo'];
$valor = $_POST['valor'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE productos SET $campo=$valor WHERE id=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo "has modificado el producto con id".$id. "su campo".$campo. "a".$valor;
$conn->close();
?>