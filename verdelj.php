<?php
include "povezava.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$restavracija_id = 5; 
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Gostilna Verdelj</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<div class="glava">
    <a href="index.php"> Nazaj</a>

    <div style="float:right;">
        <a href="prikaz_kosarice.php"> Košarica</a>
    </div>
	<h1>Gostilna Verdelj</h1>

</div>

<div class="vsebina">

    <div class="kategorije">
        <a href="#juhe">Juhe</a>
        <a href="#tradicionalne">Tradicionalne jedi</a>
        <a href="#zar">Na žaru</a>
        <a href="#priloge">Priloge</a>
    </div>


    <h2 id="juhe">Juhe</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/goveja.jpg" alt="Goveja juha">
            </td>
            <td class="info-cell">
                <h3>Goveja juha</h3>
                <p>Domača goveja juha z rezanci</p>
            </td>
            <td class="cena">3,50 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="60">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/gobova.jpg" alt="Gobova juha">
            </td>
            <td class="info-cell">
                <h3>Gobova juha</h3>
                <p>Kremna juha iz svežih gob</p>
            </td>
            <td class="cena">4,00 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="61">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

   
    <h2 id="tradicionalne">Tradicionalne jedi</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/pec.jpg" alt="Pečenica s kislim zeljem">
            </td>
            <td class="info-cell">
                <h3>Pečenica s kislim zeljem</h3>
                <p>Domača pečenica, kislo zelje in krompir</p>
            </td>
            <td class="cena">9,50 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="63">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/vrat.jpg" alt="Svinjska pečenka">
            </td>
            <td class="info-cell">
                <h3>Svinjska pečenka</h3>
                <p>Pečen svinjski vrat s praženim krompirjem</p>
            </td>
            <td class="cena">10,50 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="64">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>


    <h2 id="zar">Na žaru</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/cev.jpg" alt="Čevapčiči">
            </td>
            <td class="info-cell">
                <h3>Čevapčiči</h3>
                <p>Čevapčiči s čebulo in ajvarjem</p>
            </td>
            <td class="cena">8,50 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="66">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/mesmas.jpg" alt="Mešano meso na žaru">
            </td>
            <td class="info-cell">
                <h3>Mešano meso na žaru</h3>
                <p>Različne vrste mesa, pečen krompir in priloga</p>
            </td>
            <td class="cena">12,00 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="67">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

    <h2 id="priloge">Priloge</h2>

    <table class="menu-table">

        <tr>
            <td class="img-cell">
                <img src="slike/pom.jpg" alt="Pomfrit">
            </td>
            <td class="info-cell">
                <h3>Pomfrit</h3>
                <p>Hrustljavo ocvrt krompirček</p>
            </td>
            <td class="cena">3,00 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="69">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

        <tr>
            <td class="img-cell">
                <img src="slike/pkom.jpg" alt="Pražen krompir">
            </td>
            <td class="info-cell">
                <h3>Pražen krompir</h3>
                <p>Domače pripravljen pražen krompir</p>
            </td>
            <td class="cena">3,50 €</td>

            <td>
                <form action="kosarica.php" method="POST">
                    <input type="hidden" name="menu_id" value="70">
                    <input type="hidden" name="restavracija_id" value="5">
                    <button type="submit">Dodaj v košarico</button>
                </form>
            </td>
        </tr>

    </table>

</div>

</body>
</html>