<?php
session_start();
include "povezava.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];

$sql = "SELECT * FROM uporabniki WHERE id = '$uporabnik_id'";
$rezultat = mysqli_query($conn, $sql);
$uporabnik = mysqli_fetch_assoc($rezultat);

$naslovi_id = $uporabnik['naslovi_id'];


$sql = "SELECT * FROM naslovi WHERE id = '$naslovi_id'";
$rezultat = mysqli_query($conn, $sql);
$naslov = mysqli_fetch_assoc($rezultat);

$kraji_id = $naslov['kraji_id'];


$sql = "SELECT * FROM kraji WHERE id = '$kraji_id'";
$rezultat = mysqli_query($conn, $sql);
$kraj = mysqli_fetch_assoc($rezultat);

$drzave_id = $kraj['države_id'];


$sql = "SELECT * FROM države WHERE id = '$drzave_id'";
$rezultat = mysqli_query($conn, $sql);
$drzava = mysqli_fetch_assoc($rezultat);
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Zaključek naročila</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Zaključek naročila</h1>

<form action="narocilo.php" method="POST">

    <p>Uporabniško ime:</p>
    <input type="text" value="<?php echo $uporabnik['uporabniško_ime']; ?>" >

    <p>E-pošta:</p>
    <input type="text" value="<?php echo $uporabnik['mail']; ?>" >

    <p>Ulica in hišna številka:</p>
    <input type="text" value="<?php echo $naslov['ulica']; ?> <?php echo $naslov['hisna_stevilka']; ?>" >

    <p>Kraj:</p>
    <input type="text" value="<?php echo $kraj['naziv']; ?>" >

    <p>Država:</p>
    <input type="text" value="<?php echo $drzava['naziv']; ?>" >

    <br><br>

    <p>Način plačila:</p>
    <select name="nacin_placila" required>
        <option value="">Izberi način</option>
        <option value="Gotovina">Gotovina</option>
        <option value="Kartica">Kartica</option>
    </select>

    <br><br>

    <button type="submit">Potrdi naročilo</button>

</form>
<a href="">Nadaljuj z naročilom!</a>

</body>
</html>