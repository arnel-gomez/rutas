<?php

 $servername = "localhost";
 $username = "rutas";
 $password = "rutasadmin";
 $dbname = "rutas";

 $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error) {
  	die("Conexión fallida: ".$conn->connect_error);
  }

  

?>