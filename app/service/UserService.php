<?php

require_once('BaseService.php');

class UserService extends BaseService {

  // FETCHES ALL USER'S NAMES AND PUTS THE RESPONSE INTO AN ARRY
  public function GetAll() {
    $query = 'SELECT (name) FROM users;';
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
  }
}

