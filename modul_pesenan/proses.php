<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id       = $_POST['id_pesanan'];
$nama     = $_POST['nama_pelanggan'];
$produk   = $_POST['produk'];
$jumlah   = $_POST['jumlah'];
$tanggal  = $_POST['tanggal_pesan'];

#3.menulis query
$simpan = "INSERT INTO pesanan (id_pesanan,nama_pelanggan,produk,jumlah,tanggal_pesan) VALUES ('$id','$nama','$produk','$jumlah','$tanggal')";

#4. Jalankan query
$proses = mysqli_query ($koneksi,$simpan);


//heade("location:index.php");
?>
<script>
    document.location="index.php";
</script>