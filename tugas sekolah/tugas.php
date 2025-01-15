<?php 

define("gaji", 5000000);
define("bonus", 500000);
define("pajak", 0.12);

$jumlahProyek = 4;
$totalPendapatan = gaji + (bonus * $jumlahProyek);
$totalBersih = $totalPendapatan - ($totalPendapatan * pajak);

echo "gaji anda semula Rp. " . number_format(gaji, 0,',',''). "<br>";
echo "gaji semula + bonus Rp. ".number_format($totalPendapatan, 0,',','.'). "<br>";
echo "gaji bersih anda Rp.".number_format($totalBersih, 0,',','.');

?>