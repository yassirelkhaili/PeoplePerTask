<?php 
require "./config/sqli.php";

$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
$allowedOrigins = ['http://localhost:5500', 'http://127.0.0.1:5500'];
if (in_array($origin, $allowedOrigins))
header("Access-Control-Allow-Origin: " . $origin);
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *"); 
header("Content-Type: application/json"); 
$data_json = file_get_contents("php://input"); 
$method = $_SERVER["REQUEST_METHOD"]; 
switch ($method) {
    case "GET":
        $sql = "SELECT * FROM `sys3`.`users`"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $users = $result->fetch_all(MYSQLI_ASSOC);
                http_response_code(200);
                echo json_encode(['status' => 'success', 'message' => 'Users fetched successfully', 'content' => $users]);
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
    case "POST": 
        $data = json_decode($data_json);
        $sql = "INSERT INTO `sys3`.`users`(username,passwordHash,email, phoneNumber, dob, city) VALUES(?, ?, ?, ?, ?, ?)"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $hashedPassword = password_hash($data->password, PASSWORD_DEFAULT);
            $stmt->bind_param("ssssss", $data->username, $data->$hashedPassword, $data->email, $data->phoneNumber, $data->dob, $data->city);
            if ($stmt->execute()) {
                http_response_code(201);
                echo json_encode(['status' => 'success', 'message' => 'User created successfully']);
            } else {
                http_response_code(400);
                echo json_encode(['status'=> 'error','message'=> 'An error was encountered' . $stmt->error]);
            }
            $stmt->close();
        } else {
            http_response_code(500);
            echo json_encode(['status'=> 'error','message'=> "Error preparing statement: " . $mysqli->error]);
        }
    break; 
    case "DELETE": 
        $id = explode("/", $_SERVER["REQUEST_URI"])[4];
        if (isset($id) && is_numeric($id)) {
            $sql = "DELETE from `sys3`.`users` WHERE id=?";
            $stmt = $mysqli->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    http_response_code(204);
                    echo json_encode(['status' => 'success', 'message' => 'User was deleted successfully']);
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
            case "PUT": 
                $id = explode("/", $_SERVER["REQUEST_URI"])[4];
                if (isset($id) && is_numeric($id)) {
                    $sql = "UPDATE `sys3`.`users` SET `username` = ?, `passwordHash` = ?, `email` = ?, `phoneNumber` = ?, `dob` = ?, `city` = ? WHERE id = ?;";
                    $stmt = $mysqli->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("ssssssi", $data->username, $data->passwordHash, $data->email, $data->phoneNumber, $data->dob, $data->city, $data->id);
                        if ($stmt->execute()) {
                            http_response_code(200);
                            echo json_encode(['status' => 'success', 'message' => 'User was updated successfully']);
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