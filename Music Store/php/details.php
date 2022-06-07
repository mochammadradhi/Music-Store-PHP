<?php
require 'functions.php';

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
if ($_SESSION['priority'] == 4) {
  $ids = $_SESSION['id'];
}

$id = $_GET['id'];
$detail = query("SELECT * FROM music WHERE id=$id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details Page</title>
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
  <!-- navbar music -->
  <div class="ui sticky secondary menu " id="navbar">
    <a class="active item" href="../index.php">
      Home
    </a>
    <a class="item" href="product.php">
      Product
    </a>
    <a class="item">
      About
    </a>
    <a class="item">
      Blog
    </a>
    <div class="right menu">
      <?php if ($_SESSION['priority'] == 1) : ?>
        <a class="ui item" href="admin.php">
          <i class="large black user icon" style="margin:auto;"></i>
        </a>
      <?php else : ?>
        <a class="ui item" href="profile.php?id=<?= $ids ?>">
          <i class="large black user icon" style="margin:auto;"></i>
        </a>
      <?php endif; ?>
      <a href="" class="ui item">
        <i class="large icons" style="margin:auto;">
          <i class=" black shopping bag icon"></i>
          <i class="top right corner add icon"></i>
        </i>
      </a>
      <a href="logout.php" class="ui item">
        <i class="large icons">
          <i class=" black sign-out icon" style="margin:auto;"></i>
        </i>
      </a>
    </div>
  </div>

  <!-- background -->

  <div class="background-category">
  </div>
  <!-- sidebar details -->
  <div class="ui container">
    <div class="ui grid ">
      <div class="five wide column">
        <div class="ui vertical  text menu">
          <div class="header item">Sort By</div>
          <a class="active item">
            Closest
          </a>
          <a class="item">
            Most Comments
          </a>
          <a class="item">
            Most Popular
          </a>
        </div>

        <div class="ui vertical menu">
          <div class="item">
            <div class="header">Products</div>
            <div class="menu">
              <a class="item">Enterprise</a>
              <a class="item">Consumer</a>
            </div>
          </div>
          <div class="item">
            <div class="header">MSG Solutions</div>
            <div class="menu">
              <a class="item">User</a>
              <a class="item">Store</a>
              <a class="item">Merchant</a>
            </div>
          </div>
          <div class="item">
            <div class="header">Market</div>
            <div class="menu">
              <a class="item">Shared</a>
              <a class="item">B2B</a>
            </div>
          </div>
          <div class="item">
            <div class="header">Support</div>
            <div class="menu">
              <a class="item">E-mail Support</a>
              <a class="item">FAQs</a>
            </div>
          </div>
        </div>
      </div>
      <div class="eight wide column">
        <div class="ui fluid icon input">
          <input type="text" placeholder="Search a details...">
          <i class="search icon"></i>
        </div>
        <br>
        <img class="ui medium bordered image" src="../assets/img/guitar/<?= $detail['image'] ?>">
        <h1><?= $detail['nama'] ?></h1>
        <h3><i class="small star icon"></i> <?= $detail['rekomendasi'] ?></h3>
        <div class="ui tag labels left floated">
          <a class="ui label centered">
            <h3>Rp.<?= $detail['harga'] ?></h3>
          </a>
        </div>
        <br>
        <div class="item">
          <a class="ui tag label">New</a>
          <a class="ui red tag label">Upcoming</a>
          <a class="ui teal tag label">Featured</a>
        </div>
        <h3 class="ui dividing header">Description</h3>
        <p><?= $detail['deskripsi'] ?></p>
        <div class="ui steps">
          <div class="step">
            <i class="truck icon"></i>
            <div class="content">
              <div class="title">Shipping</div>
              <div class="description">Choose your shipping options</div>
            </div>
          </div>
          <div class="active step">
            <i class="payment icon"></i>
            <div class="content">
              <div class="title">Billing</div>
              <div class="description">Enter billing information</div>
            </div>
          </div>
          <div class="disabled step">
            <i class="info icon"></i>
            <div class="content">
              <div class="title">Confirm Order</div>
            </div>
          </div>
        </div>
        <!-- comment section -->
        <div class="ui threaded comments">
          <h3 class="ui dividing header">Comments</h3>
          <div class="comment">
            <a class="avatar">
              <img src="../assets/img/user2.jpg">
            </a>
            <div class="content">
              <a class="author">Lulu</a>
              <div class="metadata">
                <span class="date">Today at 5:42PM</span>
              </div>
              <div class="text">
                How artistic!
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
          </div>
          <div class="comment">
            <a class="avatar">
              <img src="../assets/img/user.png">
            </a>
            <div class="content">
              <a class="author">Elliot Fu</a>
              <div class="metadata">
                <span class="date">Yesterday at 12:30AM</span>
              </div>
              <div class="text">
                <p>This has been very useful for my research. Thanks as well!</p>
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
            <div class="comments">
              <div class="comment">
                <a class="avatar">
                  <img src="../assets/img/user.png">
                </a>
                <div class="content">
                  <a class="author">Jenny Hess</a>
                  <div class="metadata">
                    <span class="date">Just now</span>
                  </div>
                  <div class="text">
                    Elliot you are always so right :)
                  </div>
                  <div class="actions">
                    <a class="reply">Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="comment">
            <a class="avatar">
              <img src="../assets/img/user.png">
            </a>
            <div class="content">
              <a class="author">Joe Henderson</a>
              <div class="metadata">
                <span class="date">5 days ago</span>
              </div>
              <div class="text">
                Dude, this is awesome. Thanks so much
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
              </div>
            </div>
          </div>
          <form class="ui reply form">
            <div class="field">
              <textarea></textarea>
            </div>
            <div class="ui blue labeled submit icon button">
              <i class="icon edit"></i> Add Reply
            </div>
          </form>
        </div>
      </div>
      <div class="three wide column"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>
</body>

</html>