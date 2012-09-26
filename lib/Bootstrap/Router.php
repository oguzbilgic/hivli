<?

class Core_Library_Bootstrap_Router extends Core_Library_Bootstrap_Abstract {

  function preDetectApp(){
    $Router = Core_Library_Loader::get('Router');
    $Router->addApplication('default', '/', 'default/');
    $Router->setDefaultApplication('default');
  }

  function detectApp(){   
    $Router = Core_Library_Loader::get('Router');
    $Router->detectApp();
  }

  function route(){
    $Router = Core_Library_Loader::get('Router');
    $Router->route();
  }
}
