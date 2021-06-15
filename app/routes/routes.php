<?php

use Core\Http\Router;

$router = new Router;

$router->get('/app/', [\App\Controllers\friendController::class, 'index']);
$router->get('/app/create', [\App\Controllers\friendController::class, 'create']);
$router->post('/app/save', [\App\Controllers\friendController::class, 'store']);
$router->get('/app/edit', [\App\Controllers\friendController::class, 'edit']);
$router->post('/app/update', [\App\Controllers\friendController::class, 'update']);
$router->get('/app/destroy', [\App\Controllers\friendController::class, 'destroy']);
$router->post('/app/find', [App\Controllers\friendController::class, 'find']);
$router->get('/app/profile', [\App\Controllers\friendController::class, 'profile']);
$router->get('/app/file', [\App\Controllers\friendController::class, 'getImage']);

$router->resolve(); //Runs routes