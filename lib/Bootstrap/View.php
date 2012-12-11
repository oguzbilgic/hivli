<?

class Core_Library_Bootstrap_View extends Core_Library_Bootstrap_Abstract {

  function render(){
    $Router = Core_Library_Loader::get('Router');
    $Controller = Core_Library_Loader::get('Controller');
    $View = Core_Library_Loader::get('View');

    if($Controller->getController()->getViewParams()){
      $View->setViewParamFromArray($Controller->getController()->getViewParams());  
    }

    $View->setSitePath('');
    $View->setViewPath(APP_PATH . 'application/' . $Router->getAppFolder() . 'view/');
    $View->setPublicViewPath($Router->getApplicationName() . '/');
    $View->getHelper('Layout')->activateLayout();

    // Set the view file if it has not been set by the app already
    if(!$View->getHelper('Script')->getViewFile()){
      $View->getHelper('Script')->setViewFile($Router->getControllerName() . '/' . $Router->getActionName());
    }

    $View->render();
  }
}
