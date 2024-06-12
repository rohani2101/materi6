<?php
function salam($waktu = "datang", $nama = "admin")
{
    return " selamat $waktu, $nama";
}
function ucapan($kelas = "lab 1", $matakuliah = "pemrograman web")
{
    return " selamat belajar di $kelas, pada matakuliah $matakuliah";
}
function penjumlahan($angka1 = 0, $angka2 = 0)
{
    return " hasil penjumlahan " . $angka1 + $angka2;
}
function perkalian($angka1 = 0, $angka2 = 0)
{
    return " hasil penjumlahan " . $angka1 * $angka2;
}
?>

<h1 style="color: green"><?php echo salam(); ?></h1>
<h1 style="color: green"><?php echo ucapan("ruang 5", "statistik"); ?></h1>
<h1 style="color: green"><?php echo penjumlahan(30, 40); ?></h1>
<h1 style="color: green"><?php echo perkalian(30, 40); ?></h1>