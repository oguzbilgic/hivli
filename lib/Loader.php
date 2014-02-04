<?php

class Core_Library_Loader {
  
  public static function get($moduleName){ 
    require_once $moduleName . '.php';
    $module_class = 'Core_Library_' . $moduleName; // please don't use eval()
    $module_class::getInstance();
  
    return $loadedClass;
  }
}
