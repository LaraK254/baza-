<?php
session_start();
include "povezava.php";

if (isset($_POST['registracija'])) {

    $ime = $_POST['uporabnisko_ime'];
    $geslo = $_POST['geslo'];
    $mail = $_POST['mail'];
    $ulica = $_POST['ulica'];
    $hisna_stevilka = $_POST['hisna_stevilka'];
    $kraj = $_POST['kraj'];

    // Slovenija ima id = 1
    $drzave_id = 1;

    // Poišči kraj
    $sql = "SELECT id FROM kraji WHERE naziv = '$kraj'";
    $rezultat = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rezultat) > 0) {
        $vrstica = mysqli_fetch_assoc($rezultat);
        $kraji_id = $vrstica['id'];
    } else {
        $sql = "INSERT INTO kraji (naziv, postna_st, države_id)
                VALUES ('$kraj', 0, '$drzave_id')";
        mysqli_query($conn, $sql);
        $kraji_id = mysqli_insert_id($conn);
    }

    // Dodaj naslov
    $sql = "INSERT INTO naslovi (ulica, hisna_stevilka, kraji_id)
            VALUES ('$ulica', '$hisna_stevilka', '$kraji_id')";
    mysqli_query($conn, $sql);

    $naslovi_id = mysqli_insert_id($conn);

    // Dodaj uporabnika
    $sql = "INSERT INTO uporabniki
            (`uporabniško_ime`, geslo, mail, naslovi_id)
            VALUES
            ('$ime', '$geslo', '$mail', '$naslovi_id')";

    mysqli_query($conn, $sql);

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registracija</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<form method="POST">
    <h2>Registracija</h2>

    <input type="text" name="uporabnisko_ime" placeholder="Uporabniško ime" required>
    <input type="password" name="geslo" placeholder="Geslo" required>
    <input type="email" name="mail" placeholder="E-pošta" required>

    <input type="text" name="ulica" placeholder="Ulica" required>
    <input type="text" name="hisna_stevilka" placeholder="Hišna številka" required>
    <input type="text" name="kraj" placeholder="Kraj" required>

    <button type="submit" name="registracija">Registracija</button>
</form>

</body>
</html>