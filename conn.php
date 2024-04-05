<?php
 $servername = "localhost";
 $username = "cchuutyq_forex-expo-test";
 $password = "1]s@ck]SWUVn";
 $database = "cchuutyq_gem_coins";


 $conn = new mysqli($servername, $username, $password, $database);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
?>


