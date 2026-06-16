<?php
include "povezava.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];
$sql = "SELECT `uporabniško_ime` FROM uporabniki WHERE id = '$uporabnik_id'";
$rezultat = mysqli_query($conn, $sql);
$uporabnik = mysqli_fetch_assoc($rezultat);
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Dostava hrane</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="vrh">
    <h1>Dostava hrane</h1>
    <a href="#">
        <u>Prijavljen:<?php echo $uporabnik['uporabniško_ime']; ?></u>
    </a>
    
    <a href="odjava.php">
        <u>Odjava</u>
    </a>
</div>
<div class="oglavje">
    <h2>Naroči hrano hitro in enostavno</h2>
    <p>Izberi restavracijo in naroči na dom.</p>
</div>

<div class="vsebina">

    <h2>Restavracije</h2>

    <table>

        <tr>
            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="kolo.php"><img src="slike/kolo.jpg" class="slika-big"></a>
                    </div>

                    <div class="opis">
                        <a href="kolo.php"><h3>Kolodvorska restavracija Velenje</h3></a>
                        <p> Burgerji,  pice,  hitra hrana</p>
                        <p>Čas dostave: 20–35 min</p>
                    </div>

                </div>
            </td>

            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="basilica.php"><img src="slike/bas.jpg" class="slika-big"></a>
                    </div>

                    <div class="opis">
                        <a href="basilica.php"><h3>Pizzerija Basilica</h3></a>
                        <p> Italijanske pice, testenine</p>
                        <p>Čas dostave: 25–40 min</p>
                    </div>

                </div>
            </td>
        </tr>

        <tr>
            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="bianca.php"><img src="slike/bianca.jpg" class="slika-big"></a>
                    </div>

                    <div class="opis">
                        <a href="bianca.php"><h3>Pizzerija Bianca</h3></a>
                        <p>Domače pice, solate</p>
                        <p>Čas dostave: 25–40 min</p>
                    </div>

                </div>
            </td>

            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="carlos.php"><img src="slike/carlos.jpg" class="slika-big"></a>
                    </div>

                    <div class="opis">
                        <a href="carlos.php"><h3>Carlos Caffe</h3></a>
                        <p>Kava, sendviči, sladice</p>
                        <p>Čas dostave: 15–25 min</p>
                    </div>

                </div>
            </td>
        </tr>

        <tr>
            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="verdelj.php"><img src="slike/verdelj.jpg" class="slika-big"><a/>
                    </div>

                    <div class="opis">
                        <a href="verdelj.php"><h3>Gostilna Verdelj</h3></a>
                        <p> Domače kosilo, žar</p>
                        <p>Čas dostave: 30–50 min</p>
                    </div>

                </div>
            </td>

            <td class="kartica">
                <div class="kartica_znotraj">

                    <div class="slika-box">
                        <a href="pekinsko.php"><img src="slike/kitajska.jpg" class="slika-big"></a>
                    </div>

                    <div class="opis">
                        <a href="pekinsko.php"><h3>Kitajska restavracija Pekinško mesto</h3></a>
                        <p> Noodles, riž, azijska hrana</p>
                        <p>Čas dostave: 30–45 min</p>
                    </div>

                </div>
            </td>
        </tr>

    </table>

</div>

</body>
</html>