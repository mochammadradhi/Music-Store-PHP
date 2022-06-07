<?php
require 'functions.php';

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
if ($_SESSION['priority'] != 1) {
  header("Location: login.php");
  exit;
}

$dataPerPage = 10;
$totalData = count(query("SELECT * FROM music"));
$divide = ceil($totalData / $dataPerPage);
$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

$firstData = ($dataPerPage * $activePage) - $dataPerPage;
$showall = query("SELECT * FROM music LIMIT $firstData,$dataPerPage");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic UI/semantic.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="ui container">
    <h2 class="ui center aligned icon header">
      <br>
      <i class="circular user icon"></i>
      <h2 class="ui horizontal header divider">
        Admin Panel
      </h2>
      <h4 class="ui header center aligned">Hi! <?= $_SESSION['login']; ?></h4>
    </h2>

    <br>
    <div class="ui grid">
      <div class="four wide column"></div>
      <div class="eight wide column center aligned">
        <div class="ui compact menu">
          <a class="item" href="index_login.php">
            <i class="home icon"></i>
            Home
          </a>
          <a class="item active">
            <i class="grid layout icon"></i>
            Show All Items
          </a>
          <a class="item" href="tambah.php">
            <i class="plus square icon"></i>
            Add Items
          </a>
          <a class="item" href="admin_users.php">
            <i class="users icon"></i>
            Users
          </a>
        </div>
        <br>
        <br>
        <div class="item">
          <h3 class="ui header">Menampilkan <?= count($showall); ?> items</h3>
        </div>

      </div>
      <div class="four wide column"></div>
    </div>


    <div class="ui grid center aligned">
      <?php foreach ($showall as $s) : ?>
        <div class="three wide column">
          <div class="ui cards">
            <div class="card">
              <div class="content">
                <img class="right floated mini ui image" src="../assets/img/guitar/<?= $s['image']; ?>" style="width: 50px;">
                <div class="header">
                  <?= $s['nama']; ?>
                </div>
                <div class="meta">
                  Category <?= $s['category'] ?>
                </div>

              </div>
              <div class="extra content">
                <div class="ui two buttons">
                  <a href="ubah.php?id=<?= $s['id'] ?>">
                    <div class="ui basic green button">Edit</div>
                  </a>
                  <a href="hapus_item.php?id=<?= $s['id'] ?>" onclick="myFunction()">
                    <div class="ui basic red button">Delete</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="ui grid">
      <div class="five wide column"></div>
      <div class="six wide column center aligned">
        <div class="ui pagination menu">
          <?php for ($i = 1; $i <= $divide; $i++) : ?>
            <?php if ($i == $activePage) : ?>
              <a href="?page=<?= $i ?>" class="item active"><?= $i ?></a>
            <?php else : ?>
              <a href="?page=<?= $i ?>" class="item"><?= $i ?></a>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
      </div>
      <div class="five wide column"></div>
    </div>
  </div>
  <script>
    function myFunction() {
      confirm("Apakah anda ingin menghapus user?");
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>
</body>

</html>