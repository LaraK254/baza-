<?php
include "povezava.php";

$id = $_POST['id'];

mysqli_query($conn,
"DELETE FROM vsebina_kosarice WHERE id = $id");

header("Location: prikaz_kosarice.php");
exit();
?>