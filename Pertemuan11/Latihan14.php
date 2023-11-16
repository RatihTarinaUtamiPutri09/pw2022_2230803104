<?php 
$mahasiswa=
[
    [
        "negara" => "Indonesia",
        "ibukota" => "DKI Jakarta"
    ],
    [
        "negara" => "Singapura",
        "ibukota" => "Singapura"
    ],
    [
        "negara" => "Malaysia",
        "ibukota" => "Kuala lumpur"
    ],
    [
        "negara" => "Brunei",
        "ibukota" => "Bandar sri begawan"
    ],
    [
        "negara" => "Thailand",
        "ibukota" => "Bangkok"
    ],
    [
        "negara" => "Laos",
        "ibukota" => "Vientiane"
    ],
    [
        "negara" => "Filipina",
        "ibukota" => "Manila"
    ],
    [
        "negara" => "Myanmar",
        "ibukota" => "Naypyidaw"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

</head>
<body>
    <h1>Daftar negara ASEAN dan Ibu kota</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li><?= $mhs["negara"]; ?>:<?= $mhs["ibukota"]; ?></li>
    <?php endforeach; ?>
</body>
</html>