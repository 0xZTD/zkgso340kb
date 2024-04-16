<?php

use Controllers\UserController;

$router = new Router();
$router->register('/', UserController::class, 'index');