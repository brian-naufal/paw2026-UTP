<?php


if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    echo "Ukuran: " . $_SESSION['ukuran'] . "<br>";
    echo "Warna :" . $_SESSION['warna'] . "<br>";
    echo "Jumlah halaman: " . $_SESSION['halaman'] . "<br>";
    echo "Jumlah rangkap: " .$_SESSION['rangkap'] . "<br>";
}
