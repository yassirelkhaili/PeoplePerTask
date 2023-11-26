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
        $sql = "SELECT `freelanceID`, `freelanceName`, `skills`, `userID` FROM `sys3`.`freelance`"; 
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $freelancers = $result->fetch_all(MYSQLI_ASSOC);
                http_response_code(200);
                echo json_encode(['status' => 'success', 'message' => 'freelancers fetched successfully', 'content' => $freelancers]);
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
        $sql = "INSERT INTO `sys3`.`freelance`(freelanceName, skills, userID) VALUES(?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ssi",$data->freelanceName, $data->skills, $data->userID);
            if ($stmt->execute()) {
                http_response_code(201);
                echo json_encode(['status' => 'success', 'message' => 'freelancer created successfully']);
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
        $id = $_GET["id"];
        if (isset($id) && is_numeric($id)) {
            $sql = "DELETE from `sys3`.`freelance` WHERE freelanceID=?";
            $stmt = $mysqli->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    http_response_code(200);
                    echo json_encode(['status' => 'success', 'message' => 'freelancer was deleted successfully']);
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
                $data = json_decode($data_json);
                $id = $_GET["id"];
                if (isset($id) && is_numeric($id)) {
                    $sql = "UPDATE `sys3`.`freelance` SET `freelanceName` = ?, `skills` = ?, `userID` = ? WHERE freelanceID = ?;";
                    $stmt = $mysqli->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("ssii",$data->freelanceName, $data->skills, $data->userID, $id);
                        if ($stmt->execute()) {
                            http_response_code(200);
                            echo json_encode(['status' => 'success', 'message' => 'freelancer was updated successfully']);
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