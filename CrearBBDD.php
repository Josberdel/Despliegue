<html>
    <head>
        <meta http-equiv="content-type"content="text/html;charset=UTF-8">
    </head>
    <body> 
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname=$_POST['BBDD'];
        
        $conn = new mysqli($servername, $username, $password );
       
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE ".$dbname;
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }
        $conn = new mysqli($servername, $username, $password ,$dbname);
        $sql = "CREATE TABLE productos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        precio INT(6) NOT NULL,
        cantidad INT(6)NOT NULL
        )";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
        $conn->close();
        ?>
    </body>
</html>