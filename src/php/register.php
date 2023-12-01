<?php
require("../auth/auth.php");
require("../auth/config/mysqli.php");
use Authentication\Auth;

session_start();

global $message;
global $role;
//redirect back to get role
$role = isset($_GET["client"]) ? 0 : (isset($_GET["freelancer"]) ? 1 : null);
if ($role === null && !isset($_SESSION["message"]) && !isset($_GET["login"])) {
    header("Location: ./signup1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $username = $_POST["fname"] . $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phoneNumber = $_POST["phone"];
  $dob = $_POST["dob"];
  $city = $_POST["city"];
  $auth = new Auth($mysqli);
  try {
    $result = $auth->register($email, $username, $password, $phoneNumber, $dob, $city, $role);
    if ($result) {
      $_SESSION["message"] = "Account created successfuly";
      header("Location: ./login.php");
      exit();
    } else {
      $message = "Check your input and try again";
    }
  } catch (Exception $e) { 
    $message = $e->getMessage();
  }
}