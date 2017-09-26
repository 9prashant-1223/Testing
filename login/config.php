<?php 
$servername = "localhost";
$username = "root";
$dbpassword = "99569";
$dbname = "hackathon";


$conn = new mysqli($servername, $username, $dbpassword, $dbname );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>