<html>
    <head>
        <meta http-equiv="content-type"content="text/html;charset=UTF-8">
    </head>
    <body> 
        <?php
        //crear base de datos  cambia el servername username y passsword a los datos de tu mysql
        $servername = 51.124.40.229;
        $username = "javier";
        $password = "eepmadrid";
        $dbname=$_POST['BBDD'];
        //crea conexion 
        $conn = new mysqli($servername, $username, $password );
       
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        //crea BBDD
        $sql = "CREATE DATABASE ".$dbname;
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }
        //Crea tabla
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