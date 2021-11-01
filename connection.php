<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fortunepack';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//display in usermngment
$persons = mysqli_query($conn, "SELECT * FROM persons");