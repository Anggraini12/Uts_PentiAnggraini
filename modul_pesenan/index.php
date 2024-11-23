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
    <h3>Data Pesanan</h3>
    <span class="float-end"><a class="btn btn-primary" href="form_pesanan.php"><i class="fa fa-address-book"></i> Tambah Data</a></span>
  </div>
  <div class="card-body ">
    <table class="table -">
        <thead>
            <tr>
            <th scope="col">id_pesanan</th>
            <th scope="col">nama_pelanggan</th>
            <th scope="col">produk</th>
            <th scope="col">jumlah</th>
            <th scope="col">Tanggal_pesan</th>
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
          $nomor =1;
          foreach($proses as $data){
          

          ?>
         <tr>
            <th scope="row"><?=$nomor++?></th>
            <td><?=$data['id']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['produk']?></td>
            <td><?=$data['jml']?></td>
            <td><?=$data['tanggal']?></td>
            <td>
                <a class="btn btn-info" href="edit.php"> <i class="fa fa-pen-to-square"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id']?>">
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
              Yakin Data <b><?=$data['jurusan']?></b> Ingin Dihapus?
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