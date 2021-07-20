<?php
require_once('User.php');

$user = new User;
$user->setName('Pepe');
$user->setLastName('Perez');

var_dump($user);
echo '<br><br>';
var_dump($user->getFullName());
echo'<br><br>';

$user->id = 10;
$user->email = 'a@a.a';

var_dump($user);
echo '<br><br>';


?>