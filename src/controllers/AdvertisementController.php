<?php
require_once 'services/AdvertisementService.php';

class AdvertisementController {
    private $advertisementService;

    public function __construct() {
        $this->advertisementService = new AdvertisementService();
    }

    // Renders the advertisement page
    public function advertisementPage() {
        $advertisements = $this->advertisementService->getAdvertisements();
        require_once 'views/AdvertisementsView.php';
    }

}

?>