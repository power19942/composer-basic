<?php
namespace utils;
class Tools {
  public function __construct()
  {
    (new \utils\spes\Spec())->start();
    echo " --------- utils is here <br>";
    
  }
}