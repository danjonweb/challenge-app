<?php
require_once 'vendor/autoload.php';

require('config.php');

require('classes/Router.php');
require('classes/Database.php');
require('classes/AbstractController.php');
require('classes/AbstractModel.php');

require('controllers/Ajax.php');
require('controllers/App.php');

require('models/App.php');

$router = new Router($_GET);

$controller = $router->getController();

if ($controller) {
  $controller->executeAction();
}

?>