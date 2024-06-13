<?php
require_once 'services/AdvertisementService.php';
require_once 'services/UserService.php';

class AdvertisementController {
    private $advertisementService;
    private $userService;

    public function __construct() {
        $this->advertisementService = new AdvertisementService();
        $this->userService = new UserService();
    }

    // Renders the advertisement page
    public function advertisementPage() {
        $advertisements = $this->advertisementService->getAdvertisements();
        $userService = $this->userService; // Pass the service to use its methods
        require_once 'views/AdvertisementsView.php';
    }

}

?>