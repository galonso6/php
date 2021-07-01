<?php
require_once('./functions.php');

$salario = $_REQUEST['salario'] ?? '';
$salario = intval($salario);
$cedula = $_REQUEST['cedula'] ?? '';
$salud = $pension = $arl = $fps = 0;
$errorSalario = '';

if ($salario && $cedula) {
  $salud = deducible($salario, 'salud');
  $pension = deducible($salario, 'pension');
  $arl = deducible($salario, 'arl');
  $fps = deducible($salario, 'fps');
}

if (isset($_REQUEST['salario']) && !$_REQUEST['salario']) {
  $errorSalario = 'Debe ingresar un sal

if (isset($_REQUEST['salario']) && $_REQUEST['salario'] && !$salario) {
  $errorSalario = 'Debe ingresar un número mayor a 0';
}

$aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
$pathOrigin = $aPathOrigin[0];

header("Location: $pathOrigin?salud=$salud");
?>