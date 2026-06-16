<?php
include "povezava.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$uporabnik_id = $_SESSION['user_id'];

// 1. KOŠARICA
$kosarica_sql = mysqli_query($conn,
"SELECT * FROM kosarica 
WHERE uporabniki_id = $uporabnik_id AND status = 'aktivna'");

if (!$kosarica_sql) {
    die("Napaka pri poizvedbi košarice");
}

$kosarica = mysqli_fetch_assoc($kosarica_sql);

// če košarica ne obstaja
if (!$kosarica) {
    echo "Košarica je prazna!";
    exit();
}

$kosarica_id = $kosarica['id'];


// 2. VSOTA
$total_sql = mysqli_query($conn,
"SELECT SUM(m.cena * v.kolicina) AS total
FROM vsebina_kosarice v
JOIN `menu_živil` m ON v.menu_id = m.id
WHERE v.kosarica_id = $kosarica_id");

if (!$total_sql) {
    die("Napaka pri izračunu vsote");
}

$total = mysqli_fetch_assoc($total_sql);

$skupaj = $total['total'];

if ($skupaj === null) {
    $skupaj = 0;
}


// 3. INSERT NAROČILA
$insert = mysqli_query($conn,
"INSERT INTO naročila
(uporabniki_id, restavracije_id, naslovi_id, status, vse_skupaj, cena_dostave, skupna_cena, `košarica_id`)
VALUES
($uporabnik_id, 1, 1, 'oddano', $skupaj, 2.50, $skupaj + 2.50, $kosarica_id)");

if (!$insert) {
    die("Napaka pri ustvarjanju naročila");
}


// 4. UPDATE KOŠARICE
$update = mysqli_query($conn,
"UPDATE kosarica SET status='oddana' WHERE id=$kosarica_id");

if (!$update) {
    die("Naročilo ustvarjeno, ampak košarice ni bilo mogoče posodobiti");
}

echo "Naročilo je bilo uspešno oddano!";
?>
