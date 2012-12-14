<?php

require_once "Loader.php";
require_once "Object.php";

class Test_Controller extends PHPUnit_Framework_TestCase {

    public function testSetControllerName(){
	$controller = Core_Library_Loader::get('Controller');
	$controller->setControllerName('Example');
    }

    public function testSetActionName(){
	$controller = Core_Library_Loader::get('Controller');
	$controller->setActionName('Index');
    }

    public function testGetController(){
	$controller = Core_Library_Loader::get('Controller');
	$controller->setControllerName('Example');
	$controller->setActionName('Index');
	$controller->setControllerPath(__DIR__ . '/Controller/');
	$controller->action();
	$this->assertInstanceOf('Core_Library_Controller_Abstract', $controller->getController());
    }

    public function testAction(){
	$controller = Core_Library_Loader::get('Controller');
	$controller->setControllerName('Example');
	$controller->setActionName('Index');
	$controller->setControllerPath(__DIR__ . '/Controller/');
	$controller->action();
    }
}
