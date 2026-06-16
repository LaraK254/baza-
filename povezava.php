<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wolt_dostava";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn) {
    mysqli_set_charset($conn, "utf8");
} else {
    die("Ne morem do baze");
}
?>