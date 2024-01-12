<?php

class DB {
  public static $connection = false;

  public static function connect(array $conf): \PDO {
    if(!static::$connection) {
      try {
        // DEFINES WHICH SERVER THE DB IS RUNNING ON
        // DEFINES DATABASE NAME TO CONNECT TO 
        $dsn = "mysql:host={$conf['dbhost']};dbname={$conf['dbname']};charset=UTF8";

        // CONNECT TO DB USING PDO WITH PARAMETERS DEFINED IN Config.php
        $con = new PDO($dsn, $conf['dbuser'], $conf['dbpasswd']);

        # REDEFINE DEFAULT ERROR HANDLING IF CONNECTION TO DB FAILS 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        self::$connection = $con;
        return self::$connection;
      } catch(PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
        exit;
      }
    }    
  }
} 