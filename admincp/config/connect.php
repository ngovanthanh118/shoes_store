<?php
$severname = "localhost";
$username = "bhv";
$password = "11082002";
$database = "web_ban_giay";

$connect = new mysqli($severname, $username, $password, $database);
if ($connect->connect_errno) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
    exit();
}
