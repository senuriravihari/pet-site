<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "doggy";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if($conn){
    echo"connedcted";
}

?>
