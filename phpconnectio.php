<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpproject";

$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection


if ($conn) {
   echo "ook";
}

else
{
    echo "not_ok".mysqli_connect_error();
}
?>
