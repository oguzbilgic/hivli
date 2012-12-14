<?

class ExampleController extends Core_Library_Controller_Abstract {

  function initStart(){
    $this->view->initStart = 'run';
  }

  function IndexAction(){
    $this->view->action = 'run';
  }

  function initStop(){
    $this->view->initStop = 'run';
  }
}
