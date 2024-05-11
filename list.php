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
    foreach($anggota as $row): ?>
    <li>
        <a href=""><?= $row['Nama']; ?> </a>
    </li>
    <?php endforeach ?>
</body>
</html>