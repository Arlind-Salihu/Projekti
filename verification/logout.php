<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["emri"]);
session_destroy();
header('location:login.php');
?>