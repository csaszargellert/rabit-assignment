<?php

session_start();

define('VIEW_PATH', __DIR__.'/view');

include_once(__DIR__.'/app/connection/DB.php');
include_once(__DIR__.'/app/Config.php');
include_once(__DIR__.'/app/autoload.php');
include_once(__DIR__ .'/app/routes/Router.php');
include_once(__DIR__.'/app/View.php');
include_once(__DIR__.'/app/App.php');

$router = new Router();
$app = new App($router, new DBConfig());

// REGISTER ROUTES AND METHODS FOR WHICH THE APPLICATION RESPONDS TO
$router
->get('/rabit/', function(){
  $controller = new HomeController();
  $controller->index();
})
->get('/rabit/users/', function(){
  $service = new UserService();
  $controller = new UserController($service);
  $controller->index();
})
->get('/rabit/advertisements/', function(){
  $service = new AdvertisementService();
  $controller = new AdvertisementController($service);
  $controller->index();
});

// START THE APPLICATION
$app->Run();
