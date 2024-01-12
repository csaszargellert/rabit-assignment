<?php

class View {
  public function __construct(protected string $view, protected array $params = []) {}

  // THIS FUNCTION IS MADE FOR SIMPLICITY SAKE
  // RENDERING A VIEW IN THE BROWSER, INSTEAD OF CALLING: (new View($view, $params))->Render()
  // WE CAN ACHIEVE THE SAME RESULT BY: View::Make($view, $params)
  public static function Make(string $view, array $params = []): static {
    return new static($view, $params);
  }

  public function Render(): string {
    // SERIALIZE PATH TO POINT TO ONE OF THE FILES IN THE "view" FOLDER
    $viewPath = VIEW_PATH . '/' . $this->view . '.php';

    // RENDER VIEW IN THE BROWSER
    include $viewPath;

    return $viewPath;
  }

  public function __toString(): string {
    return $this->Render();
  } 

  // CHANGES HOW WE CAN REFERENCE $params
  // INSTEAD OF $this->params->ANY_KEY,
  // WE CAN DO $this->ANY_KEY
  public function __get(string $name) {
    return $this->params;
  }
}