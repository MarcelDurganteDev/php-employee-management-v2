<?php
require_once __DIR__."/global-required-files.php";

// require_once("libs/Database.php");
// require_once("config/executionFlow.php");
// require_once("config/baseConstants.php");
// require_once("config/constants.php");
// require_once(LIBS . "/Controller.php");
// require_once(LIBS . "/View.php");
// require_once(LIBS . "/Model.php");
// require_once(LIBS . "/Router.php");

// require_once('config/db.php');

// $router = new Router();

$app= new App();

// # This will allow to make requests to files that aren't .php
// # -----------------------------------------------------------
// # Not a directory
// RewriteCond %{REQUEST_FILENAME} !-d
// # Not a file
// RewriteCond %{REQUEST_FILENAME} !-f
// # Not a another thing
// RewriteCond %{REQUEST_FILENAME} !-l
// # -----------------------------------------------------------?
