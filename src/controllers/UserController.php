<?php
require_once 'services/UserService.php';

class UserController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    // Renders the user page
    public function userPage() {
        $users = $this->userService->getUsers();
        require_once 'views/UsersView.php';
    }

}

?>