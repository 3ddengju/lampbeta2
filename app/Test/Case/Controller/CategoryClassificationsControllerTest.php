<?php
/* CategoryClassifications Test cases generated on: 2012-02-05 05:02:20 : 1328418140*/
App::uses('CategoryClassificationsController', 'Controller');

/**
 * TestCategoryClassificationsController *
 */
class TestCategoryClassificationsController extends CategoryClassificationsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CategoryClassificationsController Test Case
 *
 */
class CategoryClassificationsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.category_classification', 'app.category', 'app.product', 'app.store', 'app.market', 'app.store_src', 'app.position', 'app.product_src', 'app.user', 'app.group', 'app.product_detail', 'app.detail', 'app.classification');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CategoryClassifications = new TestCategoryClassificationsController();
		$this->CategoryClassifications->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryClassifications);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
