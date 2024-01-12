<?php

class UserController {
  public function __construct(protected UserService $service) {}

   // FETCHES ALL USERS AND RENDERS THE USERS PAGE WITH ALL THE USERS
  public function index(): string {
    $users = $this->service->GetAll();
    
    return View::Make('users/index', $users);
  }
}