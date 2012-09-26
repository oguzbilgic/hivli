<?php

include 'Bootstrap/Abstract.php';
include 'Bootstrap/Controller.php';
include 'Bootstrap/Model.php';
include 'Bootstrap/View.php';
include 'Bootstrap/Router.php';

class Core_Library_Bootstrap {
  
  private $_plugins;
  private $_abstract;
  private $_methodList;
  
  function __construct(){
    $this->addAbstract(new Core_Library_Bootstrap_Abstract);
    $this->addPlugin(new Core_Library_Bootstrap_Router);
    $this->addPlugin(new Core_Library_Bootstrap_Model);
    $this->addPlugin(new Core_Library_Bootstrap_View);
    $this->addPlugin(new Core_Library_Bootstrap_Controller);
  }
  
  function addPlugin($plugin){
    $this->_plugins[] = $plugin;
  }
  
  function addAbstract($abstract){
    $this->_abstract = $abstract;
    $this->_methodList = get_class_methods($abstract);
  }
  
  function run(){   
    foreach($this->_methodList as $method){
      foreach ($this->_plugins as $plugin){
        $plugin->$method();
      }
    }
  }
}
