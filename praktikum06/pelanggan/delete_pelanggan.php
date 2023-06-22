<?php 
require_once 'dbkoneksi.php';
// Tangkep iddel
$delete = $_GET['iddel'];
// Bikin query hapus data
$sql = "DELETE FROM pelanggan WHERE id=?";
// prepare query 
$st = $dbh->prepare($sql);
// jalanin query
$st->execute([$delete]);

// pindahin ke hal list_pelanggan
header('location:list_pelanggan.php');

?>