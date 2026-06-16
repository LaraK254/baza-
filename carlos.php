<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$restavracija_id = 4;
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Carlos Caffe</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<div class="glava">
    <a href="index.php">Nazaj</a>

    <div style="float:right;">
        <a href="prikaz_kosarice.php">Košarica</a>
    </div>

    <h1>Carlos Caffe</h1>
</div>

<div class="vsebina">

    <div class="kategorije">
        <a href="#kava">Kava</a>
        <a href="#topli">Topli napitki</a>
        <a href="#sladice">Sladice</a>
        <a href="#prigrizki">Hitri prigrizki</a>
    </div>


    <h2 id="kava">Kava</h2>
    <table class="menu-table">

        <tr>
            <td class="img-cell"><img src="slike/esp.jpg" alt="Espresso"></td>
            <td class="info-cell">
                <h3>Espresso</h3>
                <p>Klasična italijanska kava</p>
            </td>
            <td class="cena">2,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="48">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell"><img src="slike/cap.jpg" alt="Cappuccino"></td>
            <td class="info-cell">
                <h3>Cappuccino</h3>
                <p>Espresso z mlečno peno</p>
            </td>
            <td class="cena">2,80 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="49">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell"><img src="slike/bel.jpg" alt="Bela kava"></td>
            <td class="info-cell">
                <h3>Bela kava</h3>
                <p>Kava z mlekom</p>
            </td>
            <td class="cena">2,80 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="103">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="topli">Topli napitki</h2>
    <table class="menu-table">

        <tr>
            <td class="img-cell"><img src="slike/coko.jpg" alt="Vroča čokolada"></td>
            <td class="info-cell">
                <h3>Vroča čokolada</h3>
                <p>Kremasta vroča čokolada</p>
            </td>
            <td class="cena">3,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="51">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell"><img src="slike/c.jpg" alt="Čaj"></td>
            <td class="info-cell">
                <h3>Čaj</h3>
                <p>Različni okusi</p>
            </td>
            <td class="cena">2,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="52">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="sladice">Sladice</h2>
    <table class="menu-table">

        <tr>
            <td class="img-cell"><img src="slike/cok.jpg" alt="Čokoladna torta"></td>
            <td class="info-cell">
                <h3>Čokoladna torta</h3>
            </td>
            <td class="cena">4,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="54">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell"><img src="slike/che.jpg" alt="Cheesecake"></td>
            <td class="info-cell">
                <h3>Cheesecake</h3>
            </td>
            <td class="cena">4,80 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="55">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>


    <h2 id="prigrizki">Hitri prigrizki</h2>
    <table class="menu-table">

        <tr>
            <td class="img-cell"><img src="slike/toast.jpg" alt="Toast"></td>
            <td class="info-cell">
                <h3>Toast šunka-sir</h3>
            </td>
            <td class="cena">4,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="57">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell"><img src="slike/tpisc.jpg" alt="Sendvič"></td>
            <td class="info-cell">
                <h3>Sendvič s piščancem</h3>
            </td>
            <td class="cena">5,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="59">
                    <input type="hidden" name="restavracija_id" value="4">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

</div>

</body>
</html>