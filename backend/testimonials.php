<?php 
require "./config/sqli.php";

$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
$allowedOrigins = ['http://localhost:5500', 'http://127.0.0.1:5500'];
if (in_array($origin, $allowedOrigins))
    header("Access-Control-Allow-Origin: " . $origin);
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT");
header("Content-Type: application/json"); 
$data_json = file_get_contents("php://input"); 
$method = $_SERVER["REQUEST_METHOD"]; 
switch ($method) {
    case "GET":
        $sql = "SELECT `testimonialID`, `comments`, `userID`, `created_at` FROM `sys3`.`testimonials`"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $testimonials = $result->fetch_all(MYSQLI_ASSOC);
                http_response_code(200);
                echo json_encode(['status' => 'success', 'message' => 'testimonials fetched successfully', 'content' => $testimonials]);
            } else {
                http_response_code(400);
                echo json_encode(['status'=> 'error','message'=> 'An error was encountered' . $stmt->error]);
            }
            $stmt->close();
        } else {
            http_response_code(500);
            echo json_encode(['status'=> 'error','message'=> "Error preparing statement: " . $mysqli->error]);
        }
        $mysqli->close();
        break;
    case "DELETE": 
        $id = $_GET["id"];
        if (isset($id) && is_numeric($id)) {
            $sql = "DELETE from `sys3`.`testimonials` WHERE testimonialID=?";
            $stmt = $mysqli->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    http_response_code(200);
                    echo json_encode(['status' => 'success', 'message' => 'testimonial was deleted successfully']);
                } else {
                    http_response_code(400);
                    echo json_encode(['status'=> 'error','message'=> 'An error was encountered' . $stmt->error]);
                }
                $stmt->close();
            } else {
                http_response_code(500);
                echo json_encode(['status'=> 'error','message'=> "Error preparing statement: " . $mysqli->error]);
            }
        }
            break;
}