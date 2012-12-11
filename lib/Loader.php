<?php

class Core_Library_Loader {
  
  public static function get($moduleName){ 
    require_once $moduleName . '.php';
    eval("\$loadedClass = Core_Library_" . $moduleName . "::getInstance();");

    return $loadedClass;
  }
}
