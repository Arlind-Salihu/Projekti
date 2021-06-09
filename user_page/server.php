<?php
session_start();
// inicializimi i ndryshoreve
$emri = "";
$email    = "";
$errors = array(); 
// lidheni me bazën e të dhënave
$db = mysqli_connect('localhost', 'root', '', 'a_v_projekti');
?>