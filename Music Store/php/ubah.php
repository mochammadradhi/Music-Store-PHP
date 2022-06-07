<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "Data gagal diubah";
  }
}
$music = query("SELECT * FROM music WHERE id=$id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Music</title>
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
        <div class="six wide column ">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="ui form error ">

              <h3>Form Ubah Data Items</h3>
              <div class="field">
                <input type="hidden" name="id" value="<?= $music['id']; ?>">
              </div>

              <div class="field">
                <label>Nama :</label>
                <input type="text" name="nama" value="<?= $music['nama']; ?>" autofocus required>
              </div>

              <div class="field">
                <label>Deskripsi :</label>
                <textarea name="deskripsi" id="" cols="30" rows="10"><?= $music['deskripsi']; ?></textarea>

              </div>

              <div class="field">
                <label>Harga :</label>
                <input type="text" name="harga" value="<?= $music['harga']; ?>" required>
              </div>

              <div class="field">
                <label>Rekomendasi :</label>
                <input type="text" name="rekomendasi" value="<?= $music['rekomendasi']; ?>" required>
              </div>
              <div class="field">
                <input type="hidden" name="gambar_lama" value="<?= $music['image'] ?>">
              </div>
              <div class="ui form">
                <div class="field">
                  <label>Gambar :</label>
                  <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                  <br><br>
                  <img src="../assets/img/guitar/<?= $music['image'] ?>" style="width: 200px;" class="img-preview">
                </div>
              </div>
              <br>
              <div class="input-btn"><input name="ubah" class="ui submit button" type="submit" value="Submit"></div>
          </form>
        </div>
        <br>
        <a href="admin.php">Kembali ke Admin Page</a>
        <div class="five wide column"></div>
      </div>
    </div>
  </div>

  <script src="js/script.js"></script>
</body>

</html>