<?

class Core_Library_Bootstrap_Controller extends Core_Library_Bootstrap_Abstract {

  function action(){
    $Router = Core_Library_Loader::get('Router');
    $Controller = Core_Library_Loader::get('Controller');

    $Controller->setControllerName($Router->getControllerName());
    $Controller->setActionName($Router->getActionName());
    $Controller->setControllerPath(APP_PATH . 'application/' . $Router->getAppFolder() . 'controller/'); 
    $Controller->action();
  }
}
