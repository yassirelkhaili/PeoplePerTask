<?php
use Authentication\Auth;

global $message;

if (isset( $_SESSION["message"])) {
$message = $_SESSION["message"];
unset($_SESSION["message"]);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset( $_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $auth = new Auth($mysqli);
    try {
        $result = $auth->authenticate($email, $password);
        if ($result) {
            header("Location: ../../");
            exit();
        } else {
            $message = "Check your information and try again";
        }
    } catch (Exception $exception) {
        $message = $exception->getMessage();
    }
}




