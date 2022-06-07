<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$profile = query("SELECT * FROM user WHERE priority=4");
$admin = query("SELECT * FROM user WHERE priority = 1");
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
      <h2 class="ui horizontal header divider">Admin Panel</h2>
      <h4 class="ui header center aligned">Hi! <?= $_SESSION['username']; ?></h4>
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
          <a class="item" href="admin.php">
            <i class="grid layout icon"></i>
            Show All Items
          </a>
          <a class="item" href="tambah.php">
            <i class="plus square icon"></i>
            Add Items
          </a>
          <a class="item active" href="admin_users.php">
            <i class="users icon"></i>
            Users
          </a>
        </div>
        <br>
        <br>

        <div class="item">
          <h3 class="ui header">Menampilkan <?= count($admin); ?> admin</h3>
        </div>
      </div>
      <div class="four wide column"></div>

    </div>
    <div class="ui grid centered">
      <?php foreach ($admin as $a) : ?>
        <div class="four wide column">
          <div class="ui cards">
            <div class="card">
              <div class="content">
                <img class="right floated mini ui image" src="../assets/img/user.png" style="width: 50px;">
                <div class="header">
                  <?= $a['username']; ?>
                </div>
                <div class="meta">
                  Priority <?= $a['priority'] ?>
                </div>

              </div>
              <div class="extra content center aligned">
                <div class="ui buttons">
                  <a href="hapus_user.php?id=<?= $p['id'] ?>" onclick="myFunction()">
                    <div class=" ui basic red button">Delete</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <br><br><br>
    <div class="ui grid">
      <div class="four wide column"></div>
      <div class="eight wide column center aligned">
        <div class="item">
          <h3 class="ui header">Menampilkan <?= count($profile); ?> users</h3>
        </div>
      </div>
      <div class="four wide column"></div>
    </div>
    <div class="ui grid centered">
      <?php foreach ($profile as $p) : ?>
        <div class="four wide column">
          <div class="ui cards">
            <div class="card">
              <div class="content">
                <img class="right floated mini ui image" src="../assets/img/user.png" style="width: 50px;">
                <div class="header">
                  <?= $p['username']; ?>
                </div>
                <div class="meta">
                  Priority <?= $p['priority'] ?>
                </div>

              </div>
              <div class="extra content center aligned">
                <div class="ui buttons">
                  <a href="hapus_user.php?id=<?= $p['id'] ?>" onclick="myFunction()">
                    <div class=" ui basic red button">Delete</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>
  <script>
    function myFunction() {
      confirm("Apakah anda ingin menghapus user?");
    }
  </script>
</body>

</html>