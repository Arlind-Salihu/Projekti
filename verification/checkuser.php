<?php
include_once 'logindb.php'; //include functions
$check = new Login;
$check->SessionCheck();
$check->UserType();
?>