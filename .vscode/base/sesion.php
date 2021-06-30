<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if ($email === 'a@a.co' && $password === '1234') {
  // CREAMOS SESION
  $_SESSION['email'] = $email;
  $_SESSION['id'] = random_int(1, 1000);
  header("Location: http://localhost:8888/CLASES_PHP/.vscode/base/inicio.php");
} else {
  $msg = "Las credenciales ingresadas no coinciden";
  $aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
  $pathOrigin = $aPathOrigin[0];

  header("Location: $pathOrigin?msg=$msg");
}
?>