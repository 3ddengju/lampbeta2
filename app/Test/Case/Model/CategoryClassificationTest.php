<?php
/* CategoryClassification Test cases generated on: 2012-02-01 07:23:13 : 1328080993*/
App::uses('CategoryClassification', 'Model');

/**
 * CategoryClassification Test Case
 *
 */
class CategoryClassificationTestCase extends CakeTestCase {
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

		$this->CategoryClassification = ClassRegistry::init('CategoryClassification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryClassification);

		parent::tearDown();
	}

}
