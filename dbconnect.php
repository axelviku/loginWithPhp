<?php
//connect to data base
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
//connection created
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
 }
//else {
//     echo "Connection Successful";
// }
      
?>