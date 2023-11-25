<?php
$serverName = "localhost:3307";
$dbUsername = "admin2";
$dbPassword = "1234";
$dbName = "thedonorzone";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection faild : " .mysqli_connect_error());
}