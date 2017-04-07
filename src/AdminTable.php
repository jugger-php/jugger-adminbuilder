<?php

namespace jugger\adminbuilder;

class AdminTable
{
	protected $name;
	protected $columns = [];

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setColumn(AdminTableColumn $column)
	{
		$name = $column->getName();
		$this->columns[$name] = $column;
	}

	public function getColumn(string $name)
	{
		return $this->columns[$name] ?? null;
	}

	public function getColumns()
	{
		return $this->columns;
	}
}
