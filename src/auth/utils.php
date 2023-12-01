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
        $sql = "SELECT `freelanceName`, `skills` FROM `sys3`.`freelance`";
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
        $sql = "SELECT `projects`.`ProjectTitle`, `projects`.`projectDesc`, `users`.`username`, `categories`.`categoryName`, `sub_categories`.`sub_categoryName` FROM `sys3`.`projects` JOIN `users` ON `projects`.`UserID` = `users`.`UserID` JOIN `categories` ON `projects`.`CategoryID` = `categories`.`CategoryID` JOIN `sub_categories` ON `projects`.`sub_categoryID` = `sub_categories`.`sub_categoryID`";
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
}