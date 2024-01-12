<?php 

class App {
  private static PDO $db;

  // INITIALIZE DB CONNECTION
  public function __construct(protected Router $router, DBConfig $config) {
    static::$db = DB::connect($config->db ?? []);
  }

  // MAKES db VARIABLE AVAILABLE WITHOUT INITIALIZING THE APP CLASS => App::db();
  public static function db(): PDO {
    return static::$db;
  }

  // STARTS LISTENING FOR REQUESTS
  public function Run() {
    $this->router->invoke(strtolower($_SERVER['REQUEST_METHOD']), $_SERVER['REQUEST_URI']);
  }
}