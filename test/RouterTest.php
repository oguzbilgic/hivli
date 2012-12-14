<?php

class Test_Router extends PHPUnit_Framework_TestCase {

    private function visit($uri, $host = "example.com"){
	$_SERVER['REQUEST_URI'] = $uri;
	$_SERVER['HTTP_HOST'] = $host;
	$_SERVER['SERVER_NAME'] = 'example.com';

	$router = Core_Library_Loader::get('Router');
	$router->route();
	return $router;
    }

    public function testDetectApp(){
	$router = self::visit('/');

	$router->addApplication('default', '/', 'default/');
	$router->setDefaultApplication('default');
	$router->detectApp();
	$this->assertEquals('default', $router->getApplicationName());
    }

    public function testrouteHomepage(){
	$router = self::visit('/');

	$this->assertEquals('index', $router->getControllerName());
	$this->assertEquals('index', $router->getActionName());
	$this->assertEquals('sub', $router->getSubdomain());
	$this->assertEquals(false, $router->hasSubdomain());
	$this->assertEquals(false, $router->isParam('nullParam'));
    }

    public function testRouteDefault(){
	$router = self::visit('/cont/act');

	$this->assertEquals('controller', $router->getControllerName());
	$this->assertEquals('action', $router->getActionName());
    }
}
