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

    public function getUserById($id) {
        $query = "SELECT id, name FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user = null;
        if ($row) {
            $user = new User($row['id'], $row['name']);
        }
        return $user;
    }

}

?>