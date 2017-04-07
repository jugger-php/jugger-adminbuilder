<?php

use PHPUnit\Framework\TestCase;
use jugger\adminbuilder\AdminTableColumn;

class AdminTableColumnTest extends TestCase
{
    public function testConstruct()
    {
		$column = new AdminTableColumn('name', 'className');

		$this->assertEquals('name', $column->getName());
		$this->assertEquals('className', $column->getClassName());
		$this->assertEmpty($column->getParams());
    }

	public function testConstructWithParams()
	{
		$column = new AdminTableColumn('name', 'className', [
			'key' => 'testValue',
		]);

		$this->assertEquals('name', $column->getName());
		$this->assertEquals('className', $column->getClassName());
		$this->assertEquals('testValue', $column->getParams()['key']);
	}
}
