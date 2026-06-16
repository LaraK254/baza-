<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$restavracija_id = 2;
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Pizzerija Basilica</title>
    <link rel="stylesheet" href="menu.css">
</head>

<body>

<div class="glava">
    <a href="index.php"> Nazaj</a>

    <div style="float:right;">
        <a href="prikaz_kosarice.php"> Košarica</a>
    </div>
    <h1>Pizzerija Basilica</h1>
</div>

<div class="vsebina">

    <div class="kategorije">
        <a href="#pice">Pice</a>
        <a href="#testenine">Testenine</a>
        <a href="#burgerji">Burgerji</a>
        <a href="#vegi">Vegetarijanske jedi</a>
    </div>

    <h2 id="pice">Pice</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/margarita.jpg" alt="Pizza Margherita">
            </td>
            <td class="info-cell">
                <h3>Pizza Margherita</h3>
                <p>Paradižnikova omaka, mozzarella</p>
            </td>
            <td class="cena">9,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="16">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/navadna.jpg" alt="Pizza Salami">
            </td>
            <td class="info-cell">
                <h3>Pizza Salami</h3>
                <p>Paradižnikova omaka, mozzarella, salama</p>
            </td>
            <td class="cena">10,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="17">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="testenine">Testenine</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/carbonara.jpg" alt="Carbonara">
            </td>
            <td class="info-cell">
                <h3>Testenine Carbonara</h3>
                <p>Smetana, slanina, parmezan</p>
            </td>
            <td class="cena">8,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="30">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/bolognese.jpg" alt="Bolognese">
            </td>
            <td class="info-cell">
                <h3>Testenine Bolognese</h3>
                <p>Goveje meso, paradižnikova omaka</p>
            </td>
            <td class="cena">8,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="31">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="burgerji">Burgerji</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/cheburger.jpg" alt="Cheeseburger">
            </td>
            <td class="info-cell">
                <h3>Cheeseburger</h3>
                <p>Goveje meso, sir, solata</p>
            </td>
            <td class="cena">9,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="27">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/pisburger.jpg" alt="Piščančji burger">
            </td>
            <td class="info-cell">
                <h3>Piščančji burger</h3>
                <p>Piščanec, solata, omaka</p>
            </td>
            <td class="cena">9,00 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="29">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="vegi">Vegetarijanske jedi</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/vegpic.jpg" alt="Vegi pizza">
            </td>
            <td class="info-cell">
                <h3>Vegi pizza</h3>
                <p>Zelenjava, mozzarella</p>
            </td>
            <td class="cena">9,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="33">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/vegtest.jpg" alt="Vegi testenine">
            </td>
            <td class="info-cell">
                <h3>Vegi testenine</h3>
                <p>Bučke, paprika, paradižnik</p>
            </td>
            <td class="cena">8,50 €</td>
            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="35">
                    <input type="hidden" name="restavracija_id" value="2">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

</div>

</body>
</html>