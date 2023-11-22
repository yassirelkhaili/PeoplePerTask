<?php
$servername = "localhost:3301";
$username = "root";
$password = "";
$database = "sys3";

// Create a connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}