<?php 
$link = new PDO("mysql:host=localhost;dbname=db_oopmvc", "root", "");
$result = $link->query("SELECT * from anggota");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)):

    ?>
    <li>
        <a href=""><?= $row["Nama"];?></a>
    </li>
    <?php endwhile ?>
</body>
</html>