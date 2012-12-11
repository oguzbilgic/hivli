<?

class Core_Library_View_Helper_Script extends Core_Library_View_Helper_Abstract {

  private $_viewFile;

  function setViewFile($viewFile){
    $this->_viewFile = $viewFile;
  }

  function getViewFile($viewFile){
    return $this->_viewFile;
  }

  function render(){
    foreach ($this->View->getParams() as $key => $value){
      $$key = $value ;
    }
    include $this->View->getViewPath() . 'script/' .$this->_viewFile . '.php';
  }

  function modul($modulName, $modulParams = NULL){
    $this->View->getHelper('Modul')->render($modulName, $modulParams);
  }
}
