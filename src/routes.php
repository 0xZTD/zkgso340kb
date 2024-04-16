<?php
use Sepium\Controllers\UserController;
use Sepium\Router;

$router = new Router();
$router->register('/', UserController::class, 'index');