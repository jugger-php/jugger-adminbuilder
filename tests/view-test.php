<?php

// view.php
$adminTable = new AdminTable();
$data = [];

$columns = $adminTable->getColumns();
foreach ($columns as $name => $column) {
	$widgetClass = $column->getClass().'View';
	$widget = new $widgetClass([
		'value' => $data[$name] ?? null,
		'column' => $column,
	]);

	echo "<label>{$name}</label>";
	echo $widget->render();
}

// update.php
$adminTable = new AdminTable();
$data = [];

$columns = $adminTable->getColumns();
foreach ($columns as $name => $column) {
	$widgetClass = $column->getClass().'Update';
	$widget = new $widgetClass([
		'value' => $data[$name] ?? null,
		'column' => $column,
	]);

	echo "<label>{$name}</label>";
	echo $widget->render();
}

// list.php
$adminTable = new AdminTable();
$dataSet = new DataSet();

$columns = $adminTable->getColumns();

$filter = new AdminTableFilter($columns);
$filter->load($_POST); // load filter
$filterWidget = new AdminTableFilterWidget($filter);
$filterWidget->render();

$listWidget = new AdminTableListWidget($columns, $dataSet);
$listWidget->setFilter($filter)
$listWidget->load($_GET); // load sort, pager
$listWidget->render();
