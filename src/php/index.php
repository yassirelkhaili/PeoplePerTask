<?php
require("./src/auth/config/mysqli.php");
require("./src/auth/auth.php");

use Authentication\Auth;

global $userInfo;

$auth = new Auth($mysqli);

if(isset($_SESSION["userID"])) {
  
  $userID = $_SESSION["userID"];
  $userInfo = $auth->fetchUserInfo($userID);
}

