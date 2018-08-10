<?php
require '../control/core.php';
if ( isset($_POST['username']) && isset($_POST['password']))
{
	$_SESSION['USER_OK'] = $_POST['username'];
	require '../vue/haut.php';
	echo 'bonjour'.$_POST['username'].'</br>';
}
else
{
	require '../vue/login.php';
}
require '../vue/bas.php';
?>