<?php
include "povezava.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$restavracija_id = 3; 
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Bistro Bianca</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<div class="glava">
    <a href="index.php"> Nazaj</a>

    <div style="float:right;">
        <a href="prikaz_kosarice.php"> Košarica</a>
    </div>
	<h1>Bistro Bianca</h1>

</div>

<div class="vsebina">

    <div class="kategorije">
        <a href="#zajtrki">Zajtrki</a>
        <a href="#bistro">Bistro jedi</a>
        <a href="#glavne">Glavne jedi</a>
        <a href="#sladice">Sladice</a>
    </div>

    <h2 id="zajtrki">Zajtrki</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/fr.jpg" alt="Francoski zajtrk">
            </td>
            <td class="info-cell">
                <h3>Francoski zajtrk</h3>
                <p>Rogljiček, maslo in marmelada</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="23">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">5,00 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/jajca.jpg" alt="Bianca zajtrk">
            </td>
            <td class="info-cell">
                <h3>Bianca zajtrk</h3>
                <p>Jajca, toast, sir in sveža zelenjava</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="24">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">7,50 €</td>
        </tr>

    </table>

    <h2 id="bistro">Bistro jedi</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/vreppisc.jpg" alt="Piščančji wrap">
            </td>
            <td class="info-cell">
                <h3>Piščančji wrap</h3>

                <p>Tortilja s piščancem, zelenjavo in jogurtovo omako</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="25">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">8,50 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/club.jpg" alt="Club sendvič">
            </td>
            <td class="info-cell">
                <h3>Club sendvič</h3>

                <p>Toast, piščanec, slanina, sir in zelenjava</p>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="26">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">8,00 €</td>
        </tr>

    </table>

    <h2 id="glavne">Glavne jedi</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/pecpic.jpg" alt="Piščančji zrezek">
            </td>
            <td class="info-cell">
                <h3>Piščančji zrezek s pomfrijem</h3>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="11">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">11,00 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/goberiz.jpg" alt="Rižota z gobami">
            </td>
            <td class="info-cell">
                <h3>Rižota z gobami</h3>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="12">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">10,50 €</td>
        </tr>

    </table>

    <h2 id="sladice">Sladice</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/che.jpg" alt="Cheesecake">
            </td>
            <td class="info-cell">
                <h3>Cheesecake</h3>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="33">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">4,50 €</td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/cok.jpg" alt="Čokoladna torta">
            </td>
            <td class="info-cell">
                <h3>Čokoladna torta</h3>

                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="32">
                    <input type="hidden" name="restavracija_id" value="3">
                    <button type="submit">Dodaj v košarico</button>
                </form>

            </td>
            <td class="cena">4,00 €</td>
        </tr>

    </table>

</div>

</body>
</html>