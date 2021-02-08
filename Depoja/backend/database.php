<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a_v_projekti";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Lidhja dështoi: " . mysqli_connect_error());
}
?>