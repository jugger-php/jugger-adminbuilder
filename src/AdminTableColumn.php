<?php

namespace jugger\adminbuilder;

class AdminTableColumn
{
	protected $name;
	protected $params;
	protected $className;

	public function __construct(string $name, string $className, array $params = [])
	{
		$this->name = $name;
		$this->className = $className;
		$this->params = $params;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getClassName()
	{
		return $this->className;
	}

	public function getParams()
	{
		return $this->params;
	}
}
