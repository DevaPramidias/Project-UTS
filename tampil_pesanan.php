<!DOCTYPE html>
<html lang="en">
  <head >
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar Tampil Pesanan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a href="#" class="navbar-brand">Travelowi</a>
     <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="http://localhost/pesantiket/tampil_pesanan.php" class="nav-link">Daftar Tiket</a>
        </li>
        <li class="nav-item">
          <a href="http://localhost/pesantiket/tampil_tiket.php" class="nav-link">Pesanan Saya</a>
        </li>
      </ul>
     </div>
  </nav>
    <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
               DATA PESANAN
            </div>
            <div class="card-body">
              <table class="table">
                 <div class="box-header">
                    <a href="http://localhost/pesantiket/tambah_pesanan.php" class="btn btn-primary" role="button" title="Tambah Data Pesanan"><i class="glyphicon glyphicon-plus"></i> +Tambah</a>
                    </div>
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO. HANDPHONE</th>
                    <th scope="col">NO. PESANAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   include "connect.php";
                    $qry_daftartiket=mysqli_query($conn,"select * from daftartiket");
                    $no=0;
                     while($data_daftartiket=mysqli_fetch_array($qry_daftartiket)){
                    $no++;?>
                    <tr>
                  <td><?=$no?></td>
                  <td><?=$data_daftartiket['nama']?></td> 
                  <td><?=$data_daftartiket['tanggal_lahir']?></td> 
                  <td><?=$data_daftartiket['alamat']?></td> 
                  <td><?=$data_daftartiket['no_handphone']?></td> 
                  <td><?=$data_daftartiket['no_pesanan']?></td> 
                 <td><a href="ubah_pesanan.php?id_pesanan=<?=$data_daftartiket['id_pesanan']?>" class="btn btn-success btn-primary btn-sm">Ubah</a> | <a href="hapus_pesanan.php?id_pesanan=<?=$data_daftartiket['id_pesanan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-primary btn-sm">Hapus</a></td>
                  
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
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>