<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Jilan Ablah Hanifah 221051139 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Kantin Mamah Dedeh</title>
</head>
<body>
<form action="TotalHarga.php" method="post" class="container-sm pt-3">
    <h2 class="mb-3">Daftar Menu di Kantin Mamah Dedeh</h2>
  <div class="row mb-2">
    <label for="namaAnda" class="col-sm-2 col-form-label">Nama Anda</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="namaAnda" name="nama">
    </div>
  </div>
  
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Menu</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="nasi" name="menu[]" value=2000>
        <label class="form-check-label" for="nasi" >
          Nasi ----> Rp.2000
        </label>
      </div>
    </div>
    <div class="col-sm-10 offset-sm-2 mb-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="menu[]" value=3000>
        <label class="form-check-label" for="gridCheck1">
          Ikan Bakar ----> Rp.3000
        </label>
      </div>
    </div>
    <div class="col-sm-10 offset-sm-2 mb-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="menu[]" value=4000>
        <label class="form-check-label" for="gridCheck1">
          Ayam Bakar ----> Rp.4000
        </label>
      </div>
    </div>
    <div class="col-sm-10 offset-sm-2 mb-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="menu[]" value=2000>
        <label class="form-check-label" for="gridCheck1">
          Sayur Lodeh ----> Rp.2000
        </label>
      </div>
    </div>
    <div class="col-sm-10 offset-sm-2 mb-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="menu[]" value=2000>
        <label class="form-check-label" for="gridCheck1">
          Tumis Kankung ----> Rp.2000
        </label>
      </div>
    </div>
  </fieldset>
  <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
</form>
</body>
</html>