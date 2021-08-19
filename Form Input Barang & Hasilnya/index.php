<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/register-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 06:34:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Masukin Barang</title>
</head>
<body>
      <form action="submit.php" method="post">
        <div class="input-group mb-3">
          <input type="number" name="no" id="no" class="form-control" placeholder="Input No" maxlength="20" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control" placeholder="Nama Barang" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna Barang" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="jml" id="jml" class="form-control" placeholder="Input Jumlah" maxlength="20" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
    
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftarkan Barang</button>
            <a href="index.php" class="btn btn-primary btn-block">Ulangi</a> 
            <a href="barang.php" class="btn btn-primary btn-block">Kembali</a> 
          </div>
        </div>
      </form>
</body>
</html>
