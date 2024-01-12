<?php

class HomeController {
  // RENDERS HOME PAGE
  public function index(): string {
    return View::Make('index');
  }
}