<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "bitecnologia_bd";

     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>