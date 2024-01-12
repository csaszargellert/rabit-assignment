<?php

class Router {
  private array $routes;

  // SAVES ANY KIND OF METHOD WITH THE ROUTE IT IS ASSOCIATED WITH AND
  // THE CALLBACK FUNCTION TO INVOKE ONCE REQUEST IS MADE 
  public function register(string $method, string $route, callable $action): self {
    $this->routes[$method][$route] = $action;

    return $this;
  }

  // REGISTERS A GET ROUTE
  public function get(string $route, callable $action): self {
    return $this->register('get', $route, $action);
  }

  // EXECUTES THE FUNCTION WHICH IS ASSOCIATED WITH THE GIVEN METHODS AND ROUTES
  public function invoke(string $requestMethod, string $requestUri) {
    $action = $this->routes[$requestMethod][$requestUri] ?? null;
    
    if(!$action) {
      throw new Exception('Not Found');
    }

    call_user_func($action);
  }
}
