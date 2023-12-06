<?php

$servername = "satyasql.mysql.database.azure.com";
$username = "satya";
$password = "Suchal07052003";
$databasename = "orphan";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
