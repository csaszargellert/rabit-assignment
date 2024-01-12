<?php 

// DEFINES THE STRUCTURE OF ADVERTISEMENTS
class AdvertisementModel {
  public readonly $id;
  public readonly $title;
  public readonly $userId;

  public function __construct(int $id, string $title, int $userId) {
    $this->id = $id;
    $this->title = $title;
    $this->userId = $userId;
  }
}