<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$restavracija_id = 1;
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Kolodvorska restavracija Velenje</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<div class="glava">
    <a href="index.php"> Nazaj</a>

    <div style="float:right;">
        <a href="prikaz_kosarice.php"> Košarica</a>
    </div>
    <h1>Kolodvorska restavracija Velenje</h1>
</div>

<div class="vsebina">

    <div class="kategorije">
        <a href="#malice">Dnevne malice</a>
        <a href="#juhe">Juhe</a>
        <a href="#pizze">Pizze</a>
        <a href="#solate">Solate</a>
    </div>

    <h2 id="malice">Dnevne malice</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/dunajcp.jpg" alt="Dunajski zrezek">
            </td>
            <td class="info-cell">
                <h3>Dunajski zrezek s krompirjem</h3>
                <p>Piščančje meso, krompir</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="9">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">10,00 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/svgolaz.jpg" alt="Golaž">
            </td>
            <td class="info-cell">
                <h3>Svinjski golaž</h3>
                <p>Golaž, kruhovi cmoki</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="10">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">9,50 €</td>
        </tr>

    </table>

    <h2 id="juhe">Juhe</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/goveja.jpg" alt="Goveja juha">
            </td>
            <td class="info-cell">
                <h3>Goveja juha</h3>
                <p>Z domačimi rezanci</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="13">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">4,00 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/gobova.jpg" alt="Gobova juha">
            </td>
            <td class="info-cell">
                <h3>Gobova juha</h3>
                <p>Sveže gobe</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="14">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">4,50 €</td>
        </tr>

    </table>

    <h2 id="pizze">Pizze</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/margarita.jpg" alt="Pizza Margherita">
            </td>
            <td class="info-cell">
                <h3>Pizza Margherita</h3>
                <p>Paradižnik, sir</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="16">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">8,50 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/navadna.jpg" alt="Pizza Šunka">
            </td>
            <td class="info-cell">
                <h3>Pizza Šunka</h3>
                <p>Šunka, sir</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="17">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">9,00 €</td>
        </tr>

    </table>

    <h2 id="solate">Solate</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/mesanasol.jpg" alt="Mešana solata">
            </td>
            <td class="info-cell">
                <h3>Mešana solata</h3>
                <p>Sezonska zelenjava</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="21">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">4,50 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/solatapis.jpg" alt="Piščančja solata">
            </td>
            <td class="info-cell">
                <h3>Solata s piščancem</h3>
                <p>Piščančje meso, solata</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="20">
                    <input type="hidden" name="restavracija_id" value="1">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">7,50 €</td>
        </tr>

    </table>

</div>

</body>
</html>