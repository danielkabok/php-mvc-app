<?php
require_once 'DatabaseService.php';
require_once 'models/UserModel.php';

class UserService {
    private $conn;

    public function __construct() {
        $database = new DatabaseService();
        $this->conn = $database->getConnection();
    }

    public function getUsers() {
        $query = "SELECT id, name FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($row['id'], $row['name']);
        }
        return $users;
    }

}

?>