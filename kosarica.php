<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];


if (!isset($_POST['menu_id'], $_POST['restavracija_id'])) {
    die("Napaka: manjkajo podatki.");
}

$menu_id = (int) $_POST['menu_id'];
$restavracija_id = (int) $_POST['restavracija_id'];

if ($menu_id <= 0) {
    die("Napaka: napačen menu_id.");
}


$check = mysqli_query($conn,
"SELECT id FROM kosarica 
 WHERE uporabniki_id = $uporabnik_id AND status = 'aktivna'");

if (mysqli_num_rows($check) > 0) {
    $row = mysqli_fetch_assoc($check);
    $kosarica_id = $row['id'];
} else {
    mysqli_query($conn,
    "INSERT INTO kosarica (uporabniki_id, restavracije_id, status)
     VALUES ($uporabnik_id, $restavracija_id, 'aktivna')");

    $kosarica_id = mysqli_insert_id($conn);
}


$check_menu = mysqli_query($conn,
"SELECT id FROM `menu_živil` WHERE id = $menu_id");

if (mysqli_num_rows($check_menu) == 0) {
    die("Napaka: jed ne obstaja v bazi.");
}


mysqli_query($conn,
"INSERT INTO vsebina_kosarice (kosarica_id, menu_id, kolicina)
 VALUES ($kosarica_id, $menu_id, 1)");

echo "Dodano v košarico";


header("refresh:2;url=" . $_SERVER['HTTP_REFERER']);
exit();
?>