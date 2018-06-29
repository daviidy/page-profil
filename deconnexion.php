<?php

session_start();

$_SESSION = array();

session_destroy();

echo "<h1>Tu as bien été déconnecté</h1>";

include('login.php');



 ?>
