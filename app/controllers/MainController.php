<?php

namespace App\Controllers;

class MainController {
  protected $container;

  public function __contruct(ContainerInterface $container){
    $this->container = $container;
  }

  public function home($request, $response, $args){
    return "hello";
  }

}
