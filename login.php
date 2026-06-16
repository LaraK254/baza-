<?php
session_start();
include "povezava.php";

if (isset($_POST['login'])) {

    $ime = $_POST['uporabnisko_ime'];
    $geslo = $_POST['geslo'];

    $sql = "SELECT * FROM uporabniki 
            WHERE `uporabniško_ime` = '$ime' 
            AND geslo = '$geslo'";

    $rezultat = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rezultat) == 1) {

        $user = mysqli_fetch_assoc($rezultat);

        $_SESSION['user_id'] = $user['id'];

        header("Location: index.php");
        exit();

    } else {
        echo "Napačni podatki";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prijava</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<form method="POST">
    <h2>Prijava</h2>

    <input type="text" name="uporabnisko_ime" placeholder="Uporabniško ime">
    <input type="password" name="geslo" placeholder="Geslo">

    <button type="submit" name="login">Prijava</button>
	<a href="prijava.php">Ustavrite profil</a>
</form>
	

</body>
</html>