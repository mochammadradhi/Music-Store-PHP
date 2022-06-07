<?php

require 'functions.php';

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
if ($_SESSION['priority'] == 4) {
  $id = $_SESSION['id'];
}

$dataPerPage = 10;
$totalData = count(query("SELECT * FROM music"));
$divide = ceil($totalData / $dataPerPage);
$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

$firstData = ($dataPerPage * $activePage) - $dataPerPage;
$result = query("SELECT * FROM music LIMIT $firstData,$dataPerPage");


if (isset($_POST['keyword'])) {
  $result = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Page</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic UI/semantic.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .background-category {
      background-image: url('../assets/img/background-category.jpg');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      background-position-y: -220px;
      width: 100%;
      height: 40%;
      margin-bottom: 40px;
    }

    .three.wide.column {
      margin: auto;
    }
  </style>
</head>

<body>
  <!-- Navbar Music Store -->
  <div class="ui sticky secondary menu " id="navbar">
    <a class="item" href="index_login.php">
      Home
    </a>
    <a class="active item" class="product.php">
      Product
    </a>
    <a class="item">
      About
    </a>
    <a class="item">
      Blog
    </a>
    <div class="right menu ">
      <?php if ($_SESSION['priority'] == 1) : ?>
        <a class="ui item" href="admin.php">
          <i class="large black user icon"></i>
        </a>
      <?php else : ?>
        <a class="ui item" href="profile.php?id=<?= $id ?>">
          <i class="large black user icon" style="margin:auto;"></i>
        </a>
      <?php endif; ?>
      <a href="" class="ui item">
        <i class="large icons">
          <i class=" black shopping bag icon" style="margin:auto;"></i>
          <i class="top right corner add icon" style="margin:auto;"></i>
        </i>
      </a>
      <a href="logout.php" class="ui item">
        <i class="large icons">
          <i class=" black sign-out icon" style="margin:auto;"></i>
        </i>
      </a>
    </div>
  </div>

  <div class="background-category">
  </div>
  <div class="ui container product">
    <div class="ui inverted segment">
      <div class="ui inverted secondary pointing menu">
        <a class="active item">
          Products
        </a>
        <a class="item">
          Sales
        </a>
        <a class="item">
          More
        </a>
        <div class="right menu">
          <form action="" method="POST">
            <div class="ui right aligned category search item">
              <div class="ui inverted icon input">
                <input class="prompt keyword" type="text" name="keyword" placeholder="Search products..." autofocus>
                <i class="search link icon"></i>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
    <h3 class="ui horizontal divider header">
      <i class="tag icon"></i>
      All Products
    </h3>
    <div class="container">
      <div class="ui small breadcrumb">
        <a class="section" href="../index.php">Home</a>
        <i class="right chevron icon divider"></i>
        <a class="section">Product</a>
        <i class="right chevron icon divider"></i>
        <div class="active section">All Products</div>
      </div>

      <h4 class="ui header">Menampilkan <?= count($result) ?> produk, dari semua produk</h4>
      <br>
      <div class="ui grid text ">
        <?php foreach ($result as $r) : ?>

          <div class="three wide column">
            <div class="ui card">
              <div class="content">
                <div class="right floated meta">14h</div>
                <img class="ui avatar image" src="../assets/img/user.png"> User304123
              </div>
              <div class="image">
                <img src="../assets/img/guitar/<?= $r['image'] ?>">
                <div class=" ui inverted dimmer">
                  <div class="content">
                    <div class="center">
                      <a href="details.php?id=<?= $r['id'] ?>">
                        <div class="ui primary button">Details</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="extra content">
                <h4 class="ui header center aligned"><?= $r['nama'] ?></h4>
              </div>
              <div class="extra content">
                <div class="left aligned">
                  Rp.<?= $r['harga'] ?> | |
                  <i class="star icon right aligned"></i><?= $r['rekomendasi'] ?>
                </div>
              </div>
              <div class="extra content center aligned">
                <a href="#">
                  <i class="large shopping cart icon"></i>
                </a>
                <a href="">
                  <i class="large heart icon"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <br>
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


  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <script>
    $('.ui.card .image').dimmer({
      on: 'hover'
    });
  </script>
</body>

</html>