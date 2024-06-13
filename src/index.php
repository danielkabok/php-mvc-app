<?php

// Get the URL parameter from the request URI
$requestUri = str_replace('/php-mvc-app/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$url = isset($_GET['url']) ? $_GET['url'] : trim($requestUri, '/');

// User can give more then one parameters, but we will only use the first one
$urlComponents = explode('/', $url);

// Determine the controller and action
$controllerName = !empty($urlComponents[0]) ? ucfirst($urlComponents[0]) . 'Controller' : '';
$actionName = !empty($urlComponents[0]) ? $urlComponents[0] . 'Page' : '';

$controllerFile = 'controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClassName = ucfirst($controllerName); // Class names are CamelCase
    $controller = new $controllerClassName();

    if (method_exists($controller, $actionName)) {
        $controller->$actionName();
    } else {
        // Controller file exists, but no "Page" method
        echo "Action not found!";
        redirectToDefaultPage();
}
} else {
    // Controller file does not exist 
    redirectToDefaultPage();
}

function redirectToDefaultPage() {
    require_once "controllers/IndexController.php";
    $indexController = new IndexController();
    $indexController->indexPage();
}

?>
