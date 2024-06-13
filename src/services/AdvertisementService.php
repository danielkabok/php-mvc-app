<?php
require_once 'DatabaseService.php';
require_once 'models/AdvertisementModel.php';

class AdvertisementService {
    private $conn;

    public function __construct() {
        $database = new DatabaseService();
        $this->conn = $database->getConnection();
    }

    public function getAdvertisements() {
        $query = "SELECT id, userid, title FROM advertisements";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $advertisements = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $advertisements[] = new Advertisement($row['id'], $row['userid'], $row['title']);
        }
        return $advertisements;
    }

}

?>