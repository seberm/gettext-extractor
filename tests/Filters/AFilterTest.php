<?php

require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../../Filters/AFilter.php';

/**
 * Test class for AFilter.
 * Generated by PHPUnit on 2010-12-15 at 21:59:47.
 */
class AFilterTest extends PHPUnit_Framework_TestCase {

	/** @var AFilter */
	protected $object;

	protected function setUp() {
		$this->object = $this->getMockForAbstractClass('AFilter');
	}

	/**
	 * @expectedException InvalidArgumentException
	 * @dataProvider dataProvider_AddingFunctionWithInvalidParamter
	 */
	public function testAddingFunctionWithInvalidParamter($s, $p, $c) {
		$this->object->addFunction('funcrion', $s, $p, $c);
	}
	public static function dataProvider_AddingFunctionWithInvalidParamter() {
		return array(
			array(0, null, null),
			array(1, 0, null),
			array(1, 2, 0),
			array('a', null, null),
			array(-2, null, null)
		);
	}


	public function testAddFunction() {
		$this->object->addFunction('funcrion', 1, 2, 3);
	}


	/**
	 * @todo Implement testRemoveFunction().
	 */
	public function testRemoveFunction() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testRemoveAllFunctions().
	 */
	public function testRemoveAllFunctions() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}
}
