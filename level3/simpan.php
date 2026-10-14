<?php
session_start();
$ukuran = $_POST["ukuran"];
$warna = $_POST["warna"];
$halaman = $_POST["halaman"];
$rangkap = $_POST["rangkap"];

$_SESSION['total'] = $total;
$_SESSION['ukuran'] = $ukuran;
$_SESSION['warna"'] = $warna;
$_SESSION['halaman'] = $halaman;
$_SESSION['tarif'] = $tarif;
$_SESSION['rangkap'] = $rangkap;
// Kerjakan Level 3: simpan ringkasan