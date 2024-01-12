<?php

class AdvertisementController {
  public function __construct(protected AdvertisementService $service) {}

  // FETCHES ALL ADVERTISEMENTS AND RENDERS THE ADVERTISEMENTS PAGE WITH ALL THE ADVERTISEMENTS
  public function index(): string {
    $advertisements = $this->service->GetAll();

    return View::Make('/advertisements/index', $advertisements);
  }
}