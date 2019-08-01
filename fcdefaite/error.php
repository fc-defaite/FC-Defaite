<?php
switch($_GET['code'])
{
case '404':header('Location: http://fcdefaite.fr/error404.php');
break;
default:header('Location: http://fcdefaite.fr/');
}
?>