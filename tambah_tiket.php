<!DOCTYPE html>
<html lang="en">
  <head >
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar Tambah Tiket</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Tambah Tiket</title>
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
              Tambah Data Tiket
            </div>
            <div class="card-body">
              <form action="proses_tambah_tiket.php" method="post">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>No. Handphone</label>
                  <input type="number" name="no_handphone" class="form-control">
                </div>
                <div class="form-group">
                  <label>No. Pesanan</label>
                  <input type="text" name="no_pesanan" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
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