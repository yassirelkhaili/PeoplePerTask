<?php

namespace Utilities;

use Exception;
use mysqli;

class Utils {
    private $mysqli;

    public function __construct(mysqli $mysqli) {
        $this->mysqli = $mysqli;
    }

    public function fetchFreelancers() {
        $sql = "SELECT `username` FROM `sys3`.`users` WHERE `role` = 1";
        $query = $this->mysqli->prepare($sql);
        if (!$query) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
        if (!$query->execute()) {
            throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
        }
        $result = $query->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function fetchProjects() {
        $sql = "SELECT `projects`.`projectTitle`,`projects`.`projectID`, `projects`.`projectDesc`, `users`.`username`, `categories`.`categoryName`, `sub_categories`.`sub_categoryName` FROM `sys3`.`projects` JOIN `users` ON `projects`.`UserID` = `users`.`UserID` JOIN `categories` ON `projects`.`CategoryID` = `categories`.`CategoryID` JOIN `sub_categories` ON `projects`.`sub_categoryID` = `sub_categories`.`sub_categoryID`";
        $query = $this->mysqli->prepare($sql);
        if (!$query) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
        if (!$query->execute()) {
            throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
        }
        $result = $query->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertIFNotExists($tableName, $columnName, $valueToInsert) {
        $query = "SELECT skillID FROM `sys3`.`$tableName` WHERE `$columnName` = ?";
        $stmt = $this->mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error . $valueToInsert);
        }
        $stmt->bind_param("s", $valueToInsert);
        $stmt->execute();
        $stmt->bind_result($skillID);
        if ($stmt->fetch()) {
            $stmt->close();
            return $skillID;
        }
        $stmt->close();
        $insertQuery = "INSERT INTO `sys3`.`$tableName` (`$columnName`) VALUES (?)";
        $insertStmt = $this->mysqli->prepare($insertQuery);
        if (!$insertStmt) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
        $insertStmt->bind_param("s", $valueToInsert);
        $insertStmt->execute();
        $insertStmt->close();
        return $this->mysqli->insert_id;
    }
 
    public function associateProjectSkill($projectSkillsTableName, $projectID, $skillID) {
        $checkQuery = "SELECT COUNT(*) FROM `sys3`.`$projectSkillsTableName` WHERE `projectID` = ? AND `skillID` = ?";
        $checkStmt = $this->mysqli->prepare($checkQuery);
        if (!$checkStmt) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
        $checkStmt->bind_param("ii", $projectID, $skillID);
        if (!$checkStmt->execute()) {
            throw new Exception("Execute failed: (" . $checkStmt->errno . ") " . $checkStmt->error);
        }
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();
        if ($count > 0) return; //association already exists
        $query = "INSERT INTO `sys3`.`$projectSkillsTableName` (`projectID`, `skillID`) VALUES (?, ?)";
        $stmt = $this->mysqli->prepare($query);
        if (!$stmt) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }  
        $stmt->bind_param("ii", $projectID, $skillID);
        if (!$stmt->execute()) {
            throw new Exception("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();
    }
    
}