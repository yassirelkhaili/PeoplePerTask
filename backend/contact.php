<?php 
header("Access-Control-Allow-Origin: http://localhost:5500");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST"); 
header("Content-Type: application/json"); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "./vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$data_json = file_get_contents("php://input"); 
$method = $_SERVER["REQUEST_METHOD"];
if (!empty($data_json) && $method === "POST") {
    $mail = new PHPMailer(true); 
    $data = json_decode($data_json);
        $key = $_ENV["SMTP_PWORD"]; 
        $name = $_ENV["SMTP_EMAIL"];
        try {
          $mail->isSMTP();                                            
          $mail->Host       = 'smtp.gmail.com';                     
          $mail->SMTPAuth   = true;                                   
          $mail->Username   = $name;                     
          $mail->Password   = $key;                               
          $mail->SMTPSecure = 'tls';            
          $mail->Port       = 587;    
          $mail->setFrom($data->email);                              
          $mail->addAddress($name);               
          $mail->isHTML();              
          $mail->Subject = $data->subject;
          $mail->Body    = $data->message;
          $mail->send();
          echo json_encode(["message" => "Message was sent successfully"]);
      } catch (Exception $e) {
        echo json_encode(["message" =>"Unable to send message: {$mail->ErrorInfo}"]);
      }  
      $mail->smtpClose();
}