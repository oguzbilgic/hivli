<?php

require_once "Loader.php";
require_once "Object.php";

class Test_Controller extends PHPUnit_Framework_TestCase {

    public function testAction(){
	$controller = Core_Library_Loader::get('Controller');
	$controller->setControllerName('Example');
	$controller->setActionName('Index');
	$controller->setControllerPath(__DIR__ . '/Controller/');
	$controller->action();

	$exampleController = $controller->getController();
	$this->assertInstanceOf('Core_Library_Controller_Abstract', $exampleController);

	$viewParams = $exampleController->getViewParams();
	$this->assertEquals('run', $viewParams['initStart']);
	$this->assertEquals('run', $viewParams['action']);
	$this->assertEquals('run', $viewParams['initStop']);
    }
}
