<?php

require_once "Loader.php";

class Test_Loader extends PHPUnit_Framework_TestCase {

    public function testGet(){
	$this->assertInstanceOf('Core_Library_Controller', Core_Library_Loader::get('Controller'));
    }
}
