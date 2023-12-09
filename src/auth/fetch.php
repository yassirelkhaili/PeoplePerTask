<?php 
declare(strict_types= 1);
namespace fetchdata;
use Exception;
use mysqli;

class Fetch {
    private mysqli $mysqli;
    public function __construct(mysqli $mysqli) { 
        $this->mysqli = $mysqli;
    }

    public function fetchProjects () {
        $sql = "SELECT * FROM `sys3`.`projects`";
        $query = $this->mysqli->query($sql);
        $projects = [];
        while ($row = $query->fetch_assoc()) {
            $projects[] = $row;
        }
        return $projects;
    }

    public function fetchProjectByID(int $projectID)
    {
        $sql = "SELECT `projects`.`projectID`,`projects`.`projectTitle`,`projects`.`projectDesc`, `categories`.`categoryName`, `sub_categories`.`sub_categoryName`, `users`.`username`,GROUP_CONCAT(`skill_name`) as `tags` FROM `sys3`.`projects` INNER JOIN `users` ON `projects`.`UserID` = `users`.`UserID` INNER JOIN `categories` ON `projects`.`CategoryID` = `categories`.`CategoryID` INNER JOIN `sub_categories` ON `projects`.`sub_categoryID` = `sub_categories`.`sub_categoryID` LEFT JOIN `project_skills` ON `project_skills`.`projectID` = `projects`.`projectID` LEFT JOIN `skills` ON `project_skills`.`skillID` = `skills`.`skillID` WHERE `projects`.`projectID` = ? GROUP BY `projects`.`projectID`";
        $query = $this->mysqli->prepare($sql);
    
        if (!$query) {
            throw new Exception("Prepare failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error);
        }
    
        $query->bind_param("i", $projectID);
    
        if (!$query->execute()) {
            throw new Exception("Execute failed: (" . $query->errno . ") " . $query->error);
        }
        $result = $query->get_result();
        if ($result->num_rows === 0) {
            throw new Exception("No project was found");
        }
        $project = $result->fetch_assoc();
        $result->close();
        return $project;
    }
    
    public function fetchCategories () {
        $sql = "SELECT * FROM `sys3`.`categories`";
        $query = $this->mysqli->query($sql);
        $categories = [];
        while ($row = $query->fetch_assoc()) {
            $categories[] = $row;
        }
        return $categories;
    }

    public function fetchSub_categories () {
        $sql = "SELECT * FROM `sys3`.`sub_categories`";
        $query = $this->mysqli->query($sql);
        $sub_categories = [];
        while ($row = $query->fetch_assoc()) {
            $sub_categories[] = $row;
        }
        return $sub_categories;
    }
}