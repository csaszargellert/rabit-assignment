<?php

// THIS FUNCTION TELLS PHP HOW TO AUTOMATICALLY FIND CLASSES IN CERTAIN DIRECTORIES
// INSTEAD OF US HAVING TO MANUALLY REQUIRE THEM
spl_autoload_register(function($class) {
  if(file_exists(__DIR__.'/controller/' . $class . '.php')) {
    require __DIR__.'/controller/' . $class . '.php';
  }

  if(file_exists(__DIR__.'/service/' . $class . '.php')) {
    require __DIR__.'/service/' . $class . '.php';
  }
});