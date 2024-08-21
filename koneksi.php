<?php
$host = 'localhost'; 
$user = 'root';      
$password = '';          
$dbname = 'presensi'; 

$db = mysqli_connect($host, $user, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
