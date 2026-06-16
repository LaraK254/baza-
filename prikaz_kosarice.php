<?php
include "povezava.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$uporabnik_id = $_SESSION['user_id'];

/* najdi aktivno košarico */
$kos = mysqli_query($conn,
"SELECT id FROM kosarica 
 WHERE uporabniki_id = $uporabnik_id AND status = 'aktivna'");

if (mysqli_num_rows($kos) == 0) {
    echo "Košarica je prazna";
    exit();
}

$k = mysqli_fetch_assoc($kos);
$kosarica_id = $k['id'];

/* items */
$items = mysqli_query($conn,
"SELECT m.naziv, m.cena, v.kolicina, v.id
 FROM vsebina_kosarice v
 JOIN menu_živil m ON v.menu_id = m.id
 WHERE v.kosarica_id = $kosarica_id");
?>
<head>
    <meta charset="UTF-8">
    <title>Košarica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="okvir">
    <h1>Košarica</h1>

    <table>
        <tr>
            <th>Jed</th>
            <th>Količina</th>
            <th>Cena</th>
            <th>Izbriši</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($items)) { ?>
        <tr>
            <td><?php echo $row['naziv']; ?></td>
            <td><?php echo $row['kolicina']; ?></td>
            <td><?php echo $row['cena']; ?> €</td>
            <td>
                <form action="izbrisi.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="gumb">Izbriši</button>
					
                </form>
				<form action="zakljucek.php" method="POST">
						<button type="submit">Zaključi naročilo</button>
				</form>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>