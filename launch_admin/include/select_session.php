<?php
session_start();
require 'functions/class_login.php';

$login = new Login();

echo $login->selectSession();
?>
