<?php
require("../auth/auth.php");
require("../auth/config/mysqli.php");
use Authentication\Auth;

session_start();

global $message;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $username = $_POST["fname"] . $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phoneNumber = $_POST["phone"];
  $dob = $_POST["dob"];
  $city = $_POST["city"];
  $auth = new Auth($mysqli);
  try {
    $result = $auth->register($email, $username, $password, $phoneNumber, $dob, $city);
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