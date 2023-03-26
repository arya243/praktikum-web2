<?php 

$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

echo "Nama Customer :" . $customer;
echo "<br/>Pilih Produk :" . $produk;
echo "<br/>Jumlah :" . $jumlah;

$total_belanja;
$tv;
$kulkas;
$mesin_cuci;

if ($tv = 4200000) {
    $total_belanja = "4200000";
} if ($kulkas = 3200000) {
    $total_belanja = "3200000";
} if ($mesin_cuci = 3000000) {
    $total_belanja = "3000000";
} else {

}

echo "<br/>Total Belanja :" . $total_belanja = ($tv + $jumlah);
?>