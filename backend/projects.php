<?php 
require "./config/sqli.php"; 
header("Access-Control-Allow-Origin: http://localhost:5500");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *"); 
header("Content-Type: application/json"); 
$data_json = file_get_contents("php://input"); 
$method = $_SERVER["REQUEST_METHOD"]; 
switch ($method) {
    case "GET":
        $sql = "SELECT * FROM `sys3`.`projects`"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            if ($stmt->execute()) {
                http_response_code(201);
                echo json_encode(['status' => 'success', 'message' => 'Project created successfully']);
            } else {
                http_response_code(400);
                echo json_encode(['status'=> 'error','message'=> 'An Error was encountered' . $stmt->error]);
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
        $sql = "INSERT INTO `sys3`.projects (projectTitle,projectDesc,userID) VALUES(?, ?, ?, ?)"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sss", $data->projectTitle, $data->projectDesc, $data->userID);
            if ($stmt->execute()) {
                http_response_code(201);
                echo json_encode(['status' => 'success', 'message' => 'Project created successfully']);
            } else {
                http_response_code(400);
                echo json_encode(['status'=> 'error','message'=> 'An Error was encountered' . $stmt->error]);
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
            $sql = "DELETE from phpcrud.users WHERE id=:id"; 
        }
            break; 
}