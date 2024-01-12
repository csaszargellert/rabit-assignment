<?php 

class DBConfig {
  public readonly array $config;

  public function __construct() {
    $this->config = [
      'db' => [
        'dbhost' => 'localhost',
        'dbname' => 'rabit_assignment',
        'dbuser' => 'root',
        'dbpasswd' => '',
      ]
    ];
  }

  // CHANGES HOW WE CAN REFERENCE KEYS IN $config
  // INSTEAD OF (new DBConfig())->config->db,
  // WE CAN DO (new DBConfig())->db
  public function __get(string $name) {
    return $this->config[$name] ?? null;
  }
}

