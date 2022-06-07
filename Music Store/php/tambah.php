<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "Data gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Music Items</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>

  <style>
    body {
      margin: 30px;
    }
  </style>
</head>

<body>
  <div class="ui internally celled grid">
    <div class="row">
      <div class="six wide column"></div>
      <div class="ui segment">
        <div class="six wide column">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="ui form error ">
              <h3>Form Data Item</h3>
              <div class="field">
                <label>Kategori :</label>
                <div class="ui selection dropdown">
                  <input type="hidden" name="kategori">
                  <i class="dropdown icon"></i>
                  <div class="default text">Kategori</div>
                  <div class="menu">
                    <div class="item" value="guitar">Guitar</div>
                    <div class="item" value="bass">Bass</div>
                    <div class="item" value="violin">Biola</div>
                    <div class="item" value="flute">Flute</div>
                    <div class="item" value="saxophone">Saxophone</div>
                    <div class="item" value="drum">Drum</div>
                    <div class="item" value="kahon">Kajon</div>
                    <div class="item" value="loopstation">Loop Station</div>
                    <div class="item" value="dj">DJ</div>
                    <div class="item" value="piano">Piano</div>
                  </div>
                </div>
              </div>

              <div class="field">
                <label>Nama :</label>
                <input type="text" name="nama" autofocus required>
              </div>

              <div class="field">
                <label>Deskripsi :</label>
                <textarea name="deskripsi" id="" cols="30" rows="5"></textarea>
              </div>

              <div class="field">
                <label>Harga :</label>
                <input type="text" name="harga" required>
              </div>

              <div class="field">
                <label>Rekomendasi :</label>
                <input type="text" name="rekomendasi" required>
              </div>

              <div class="field">
                <label>Gambar :</label>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <br><br>
                <img src="../assets/img/user.png" style="width: 150px;" class="img-preview">
              </div>

              <div class="input-btn"><input name="submit" class="ui submit button" type="submit" value="Submit"></div>
          </form>
        </div>
      </div>
      <br>
      <a href="admin.php">Kembali ke Admin Page</a>
      <div class="five wide column"></div>
    </div>

  </div>
  </div>
  <script>
    $('.ui.selection.dropdown')
      .dropdown({
        maxSelections: 5
      });
  </script>
  <script src="../assets/js/script.js"></script>
</body>

</html>