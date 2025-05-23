<?php
App::import('Controller', 'AppController');

class AppControllerTest extends CakeTestCase {
	public $fixtures = array(
		'plugin.configs.config',
		'plugin.management.aco',
		'plugin.management.aro',
		'plugin.management.aros_aco',
	);

/**
 * @brief set up at the start
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * @brief break down at the end
 */
	public function tearDown() {
		parent::tearDown();
	}

/**
 * @brief test last page session key generation
 */
       public function testLastPageRedirectVar() {
               $request = new CakeRequest('/some/url');
               $request->here = '/some/url';
               $Controller = new AppController($request, new CakeResponse());

               $expected = 'Infinitas.last_page./some/url';
               $this->assertEquals($expected, $Controller->lastPageRedirectVar());
       }
}