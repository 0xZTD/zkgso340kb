<?php

require 'autoload.php';

$uri = $_SERVER['REQUEST_URI'];

require './src/routes.php';
$router->send($uri);
