<?php 
session_start();
require("../auth/auth.php");
require("../auth/config/mysqli.php");

use Authentication\Auth;

$auth = new Auth($mysqli);
$userInfo = $auth->fetchUserInfo($_SESSION["userID"]);
$request_uri = $_SERVER['REQUEST_URI'];
$allowedRoles = array(3);
if ($request_uri === "/src/pages/dashprojectsfreelance.php" && $userInfo["role"]  === 1)
    $allowedRoles[] = 1;
if ($request_uri === "/src/pages/dashprojectsclient.php" && $userInfo["role"] === 0)
  $allowedRoles[] = 0;
if (isset($_SESSION["userID"])) {
if (!in_array($userInfo["role"], $allowedRoles)) {
  header("Location: ../../");
  exit();
} 
} else {
  header("Location: ../../");
  exit();
}
