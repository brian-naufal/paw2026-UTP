<?php
$ukuran = $_POST["ukuran"];
$warna = $_POST["warna"];
$halaman = $_POST["halaman"];
$rangkap = $_POST["rangkap"];

$tarif = 0;
$total = 0;
$valid = false;
$pesan = "Perhitungan belum dibuat.";

// Kerjakan Level 2 di sini
if ($ukuran === "A4") {
    if ($warna === 'Berwarna') {
    $tarif = 1500;
    }
    $tarif += 500;
    $valid = true;
} 
if ($ukuran === "F4") {
    if ($warna === 'Berwarna') {
    $tarif = 1800;
    }
    $tarif += 700;
    $valid = true;
}
// ....

if ($valid) {
    $total = $tarif * $halaman * $rangkap;
}