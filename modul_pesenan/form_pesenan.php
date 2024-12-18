<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
  <?php include_once('../navbar.php');
  ?>
<div class="container">
    <div class="row mt-5">
        <div class ="col-6"></div>
        <div class="card">
  <div class="card-header">
    <h3>Form Tabel Pemesanan</h3>
  </div>
  <div class="card-body ">
  <form action="proses.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Id Pesanan</label>
        <input type="text" name="id_pesanan" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Produk</label>
        <input type="text" name="produk" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Pesan</label>
        <input type="date" name="tanggal_pesan" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
</form>
  </div>
  </div>
  </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>