<?php
    
    function isPrima($a) { // Fungsi untuk mengecek bilangan prima
        if ($a < 2) {
            return false;
        }
        for ($b = 2; $b <= sqrt($a); $b++) {
            if ($a % $b == 0) {
                return false;
            }
        }
        return true;
    }

    echo "Pengulangan untuk mencari kategori bilangan : <br><br>";

    
    for ($a = 1; $a <= 20; $a++) { // looping mengecek bilangan dari 1 hingga 20
        if ($a % 2 == 0) {
            echo " - Angka $a adalah bilangan genap ";
        } else {
            echo " - Angka $a adalah bilangan ganjil ";
        }

        if (isPrima($a)) {
            echo "sekaligus bilangan prima<br>";
        } else {
            echo "<br>";
        }
    }
?>