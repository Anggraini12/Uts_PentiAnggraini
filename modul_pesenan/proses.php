<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id       = $_POST['id'];
$nama     = $_POST['nama'];
$produk   = $_POST['produk'];
$jml      = $_POST['jml'];
$tanggal  = $_POST['tanggal'];

#3.menulis query
$simpan ="INSERT INTO pesenan (id,nama,produk,jml,tanggal) VALUES ('$id','$nama','$produk','$jml','$tanggal')";

#4. Jalankan query
$proses = mysqli_query ($koneksi,$simpan);


//header("location:index.php");
?>
<script>
    document.location="index.php";
</script>