<?php 

// DEFINES THE STRUCTURE OF USERS
class UserModel {
  public readonly  $id;
  public readonly $name;
  public readonly $advertisements;

  public function __construct(int $id, string $title, array $advertisements) {
    $this->id = $id;
    $this->title = $title;
    $this->advertisements = $advertisements;
  }
}