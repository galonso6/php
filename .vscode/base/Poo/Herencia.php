<?php

require_once('Employee.php');

$employee = new Employee(100);
var_dump($employee->getUserId());
var_dump($employee->getPassword());

echo '<br><br>';

$employee->setName('Geovany');
$employee->setLastname('Gonzalez');

var_dump($employee->getFullName());

echo '<br><br>';

?>