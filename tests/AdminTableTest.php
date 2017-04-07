<?php

use PHPUnit\Framework\TestCase;
use jugger\adminbuilder\AdminTable;
use jugger\adminbuilder\AdminTableColumn;

class AdminTableTest extends TestCase
{
    public function testConstruct()
    {
		$adminTable = new AdminTable('table_name');

		$this->assertEquals('table_name', $adminTable->getName());
		$this->assertEmpty($adminTable->getColumns());
    }

	public function testGetColumns()
	{
		$adminTable = new AdminTable('table_name');
		$this->assertEmpty($adminTable->getColumns());
		$this->assertTrue(is_array($adminTable->getColumns()));
	}

	/**
	 * @depends testGetColumns
	 */
	public function testSetColumn()
	{
		$adminTable = new AdminTable('table_name');

		$column1 = new AdminTableColumn('column1', 'className');
		$column2 = new AdminTableColumn('column2', 'className');
		$adminTable->setColumn($column1);
		$adminTable->setColumn($column2);

		$columns = $adminTable->getColumns();
		$this->assertTrue($columns['column1'] === $column1);
		$this->assertTrue($columns['column2'] === $column2);
	}
}
