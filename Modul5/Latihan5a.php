<?php
$angka = isset($_GET['angka']) ? intval($_GET['angka']) : 10;

$angka = max(1, min($angka, 10));

for ($r = 1; $r <= $angka; $r++) {
    for ($h = 1; $h <= $angka - $r + 1; $h++) {
        echo $h . ' ';
    }
    echo "<br>";
}
?>