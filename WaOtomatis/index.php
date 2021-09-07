<?php 
if(isset($_GET['success'])) {
  echo "<script>";
  echo "alert('Pesan Terkirim!')";
  echo "</script>";
}
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web | Kirim Pesan WhatsApp</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <h1 class="my-3">Web Kirim Pesan WhatsApp</h1>
      
      <form method="post" action="kirim.php">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label">Nomer Telepon <sup style="color: darkred">*example: 628*********</sup></label>
              <input type="number" class="form-control" name="notelp">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>