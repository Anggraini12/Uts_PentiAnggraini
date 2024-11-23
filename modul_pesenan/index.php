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
        <div class ="col-8"></div>
        <div class="card">
  <div class="card-header">
    <h3>Data Pesanan</h3>
    <span class="float-end"><a class="btn btn-primary" href="form_pesenan.php"fa fa-address-book"></i> Tambah Data</a></span>
  </div>
  <div class="card-body ">
    <table class="table -">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Produk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pesan</th>
            </tr>
        </thead>
        <tbody>
          <?php
          #1. koneksikan file ini
          include("../koneksi.php");

          #2. Menulis query
          $tampil = "SELECT * FROM pesanan";

          #3. Jalankan query
          $proses = mysqli_query($koneksi,$tampil);

          #4. tampilkan data dari database
          foreach($proses as $data){
          

          ?>
         <tr>
            <td><?=$data['id_pesanan']?></td>
            <td><?=$data['nama_pelanggan']?></td>
            <td><?=$data['produk']?></td>
            <td><?=$data['jumlah']?></td>
            <td><?=$data['tanggal_pesan']?></td>
            <td>
                <a class="btn btn-info" href="edit.php"> <i class="fa fa-pen-to-square"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id_pesanan']?>">
                <i class="fa fa-trash"></i>
                </button>
          <div class="modal fade" id="hapus<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">PERINGATAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              Yakin Data <b><?=$data['pesanan']?></b> Ingin Dihapus?
          </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="hapus.php?xyz=<?=$data['id']?>" class="btn btn-primary">Hapus</a>
      </div>
      </div>
      </div>
      </div>
            </td>
         </tr>
         <?php
          }
         ?>
        </tbody>
    </table>
  </div>
  </div>
  </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>