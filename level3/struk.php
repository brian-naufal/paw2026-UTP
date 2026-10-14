<?php

include "level3/simpan.php";

if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    echo "Ukuran: " . $_SESSION["ukuran"];
    echo "Warna :" . $_SESSION["warna"];
    echo "Jumlah halaman: " . $_SESSION["halaman"];
    echo "Jumlah rangkap: " .$_SESSION["rangkap"];
}
