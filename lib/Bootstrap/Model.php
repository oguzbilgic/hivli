<?
class Core_Library_Bootstrap_Model extends Core_Library_Bootstrap_Abstract {

  function postDetectApp(){
    $Model = Core_Library_Loader::get('Model');
    $Router = Core_Library_Loader::get('Router');
    $Model->addModelPath(APP_PATH . 'library/');
    set_include_path(get_include_path() . PATH_SEPARATOR . APP_PATH . 'library/');
  }	
}

