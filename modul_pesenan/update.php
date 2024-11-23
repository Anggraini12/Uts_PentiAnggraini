<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id         = $_POST['id_pesanan'];
$nama       = $_POST['nama_pelanggan'];
$produk     = $_POST['produk'];
$jumlah     = $_POST['jumlah'];
$tanggal    = $_POST['tanggal_pesan'];

#3.menulis query
$sunting = "UPDATE pesanan SET nama_pelanggan='$nama',produk='$produk'jumlah='$jumlah',tanggal_pesan=$tanggal' WHERE id='$id'";

#4. Jalankan query
$proses = mysqli_query($koneksi,$sunting);

#5. Mengalihkan halaman
//header("location:index.php");
?>
<script>
    document.location="index.php";
</script>