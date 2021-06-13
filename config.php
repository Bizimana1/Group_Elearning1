<?php
$db="elearning";
$user="root";
$password="";
$server= "localhost";

$conn = new mysqli($server, $user, $password, $db);
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
?>