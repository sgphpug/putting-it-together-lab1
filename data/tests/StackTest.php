<?php
class StackTest extends PHPUnit_Framework_TestCase
{
	public $Stack;

	public function setUp()
	{
		$this->Stack = new Stack;
	}

	public function testAdd()
	{
		// $this->assertTrue(true, "This should be truthy");
		$this->assertEmpty($this->Stack->data, "Stack array should be empty");
		$result = $this->Stack->add('blah');
		$this->assertTrue($result);
		$this->assertNotEmpty($this->Stack->data, "Stack array should NOT be empty");
		$this->assertEquals(1, count($this->Stack->data), "Should only have 1 item");
	}

	public function testRemove()
	{
		$this->assertEmpty($this->Stack->data, "Stack array should be empty");
		$this->Stack->add('blah');
		$this->Stack->add('boo');
		$this->assertEquals(2, count($this->Stack->data), "Should only have 2 item");	

		$result = $this->Stack->remove('blah');
		$this->assertTrue($result);
		$this->assertEquals(1, count($this->Stack->data), "Should only have 1 item");

		$result = $this->Stack->remove('foo');
		$this->assertFalse($result);
		$this->assertEquals(1, count($this->Stack->data), "Should only have 1 item");		

	}

}