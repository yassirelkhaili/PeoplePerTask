<?php 
session_start();
require("../auth/auth.php");
require("../auth/config/mysqli.php");

use Authentication\Auth;

$auth = new Auth($mysqli);
$request_uri = $_SERVER['REQUEST_URI'];
$allowedRoles = array(3);
if ($request_uri === "/src/pages/dashprojects.php")
    $allowedRoles[] = 1;
if (isset($_SESSION["userID"])) {
  $userInfo = $auth->fetchUserInfo($_SESSION["userID"]);
if (!in_array($userInfo["role"], $allowedRoles)) {
  header("Location: ../../");
  exit();
} 
} else {
  header("Location: ../../");
  exit();
}
