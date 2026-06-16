<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];


$sql = "SELECT * FROM kosarica WHERE uporabnik_id = '$uporabnik_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "Košarica je prazna";
    exit();
}


$sql = "SELECT naslovi_id FROM uporabniki WHERE id = '$uporabnik_id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$naslovi_id = $row['naslovi_id'];


$vse_skupaj = 0;

mysqli_data_seek($result, 0);
while ($r = mysqli_fetch_assoc($result)) {
    $vse_skupaj += $r['cena'] * $r['kolicina'];
}


$cena_dostave = 2.00;
$skupna_cena = $vse_skupaj + $cena_dostave;


mysqli_data_seek($result, 0);
$first = mysqli_fetch_assoc($result);
$restavracije_id = $first['restavracije_id'];

$sql = "INSERT INTO narocila
(uporabniki_id, restavracije_id, naslovi_id, status, vse_skupaj, cena_dostave, skupna_cena, kosarica_id)
VALUES
('$uporabnik_id', '$restavracije_id', '$naslovi_id', 'novo', '$vse_skupaj', '$cena_dostave', '$skupna_cena', 0)";

mysqli_query($conn, $sql);


$sql = "DELETE FROM kosarica WHERE uporabnik_id = '$uporabnik_id'";
mysqli_query($conn, $sql);


header("refresh:2;url=index.php");
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Naročilo</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 150px;
        }
        h1 {
            color: green;
        }
    </style>

</head>
<body>

<h1>Hvala za naročilo </h1>
<p>Preusmeritev čez 2 sekundi...</p>

</body>
</html>