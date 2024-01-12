<?php

require_once('BaseService.php');

class AdvertisementService extends BaseService {
  // FETCHES ALL USERS'S NAMES AND TITLES OF ADVERTISEMENTS AND  PUTS THE RESPONSE INTO AN ARRY
  public function GetAll() {
    $query = 'SELECT ad.title, u.name FROM advertisements AS ad LEFT JOIN users AS u ON u.id = ad.userid ORDER BY u.id;';
    
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
  }
}
