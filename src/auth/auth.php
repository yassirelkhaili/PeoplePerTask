<?php
declare(strict_types=1);

namespace Authentication;

use mysqli;
use Exception;
class Auth
{
    private $mysqli;
    public $userID;

    public function __construct(mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function emailExists(String $email)
    {
        $sql = "SELECT COUNT(*) as count FROM users WHERE email = ?";
        $query = $this->mysqli->prepare($sql);
        $query->bind_param("s", $email);
        $query->execute();
        $row = $query->get_result()->fetch_assoc();
        $query->close();
        return $row["count"] > 0;
    }
    public function authenticate(String $email, String $password)
    {
        $sql = "SELECT `userID`, `passwordHash` FROM `sys3`.`users` WHERE `email` = ?";
        $query = $this->mysqli->prepare($sql);
        $query->bind_param("s", $email);
        if (!$query->execute()) {
            throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
        }
        $result = $query->get_result();
        $authException = new Exception("Wrong email or password");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["passwordHash"])) {
                $this->userID = $row["userID"];
                return TRUE;
            } else {
                throw $authException;
            }
        } else {
            throw $authException;
        }
    }

    public function fetchUserInfo ($userID) {
        $sql = "SELECT `email`, `phoneNumber`, `dob`, `city`, `role` FROM `sys3`.`users` WHERE `userID` = ?";
        $query = $this->mysqli->prepare($sql);
        $query->bind_param("i", $userID);
        $query->execute();
        $result = $query->get_result();
        $userInfo = $result->fetch_assoc();
        return $userInfo;
    }

    public function userHasPermission ($projectID, $userID) {
        $sql = "SELECT * FROM `sys3`.`projects` WHERE projectID = ?";
        $query = $this->mysqli->prepare($sql);
        if (!$query) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
        $query->bind_param("i", $projectID);
        if (!$query->execute()) {
            throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
        }
        $result = $query->get_result();
        if (!$result->num_rows > 0) {
            throw new Exception("404 not Found");
        }
        $project = $result->fetch_assoc();
        return $project["userID"] === $userID;
    }
 
    public function register(String $email, String $username, String $password, String $phoneNumber, String $dob, String $city, int $role)
    {
        if (!$this->emailExists($email)) {
            $sql = "INSERT INTO `sys3`.`users` (`username`, `passwordHash`, `email`, `phoneNumber`, `dob`, `city`, `role`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $query = $this->mysqli->prepare($sql);
            if (!$query) {
                throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
            }
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query->bind_param("ssssssi", $username, $hashedPassword, $email, $phoneNumber, $dob, $city, $role);
            if (!$query->execute()) {
                throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
            }
            return true;
        } else {
            throw new Exception("Email already exists");
        }
    }
}
