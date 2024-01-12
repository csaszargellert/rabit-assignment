<?php 

abstract class BaseService {
  // AVAILABLE IN ALL CHILD CLASSES
  protected PDO $db;

  public function __construct() {
    $this->db = App::db();
  }

  // CHILD CLASSES MUST IMPLEMENT THIS FUNCTION
  abstract public function GetAll(); 
}