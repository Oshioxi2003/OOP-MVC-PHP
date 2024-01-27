<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/messages.php');
require('classes/bootstrap.php');
require('classes/controller.php');
require('classes/model.php');

require('controllers/home.php');
require('controllers/news.php');
require('controllers/contact.php');
require('controllers/file.php');
require('controllers/log.php');
require('controllers/introduce.php');
require('controllers/StorageUnit.php');

require('models/home.php');
require('models/news.php');
require('models/contact.php');
require('models/file.php');
require('models/log.php');
require('models/introduce.php');
require('models/StorageUnit.php');

$bootstrap = new Bootstrap($_GET); // Get all url parameters
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}

?>