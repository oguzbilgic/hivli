<?

class Core_Library_Bootstrap_Controller extends Core_Library_Bootstrap_Abstract {

  function preAction(){
    $Controller = Core_Library_Loader::get('Controller');
    $Router = Core_Library_Loader::get('Router');
    $Controller->setControllerName($Router->getControllerName());
    $Controller->setActionName($Router->getActionName());
    $Controller->setControllerPath(APP_PATH . 'application/' . $Router->getAppFolder() . 'controller/'); 
  }

  function action(){
    $Controller = Core_Library_Loader::get('Controller');
    $Controller->action();

    $viewParams = $Controller->getController()->getViewParams();
    if(!empty($viewParams)){
      $view = Core_Library_Loader::get('View');
      $view->setViewParamFromArray($viewParams);  
    }
  }
}
