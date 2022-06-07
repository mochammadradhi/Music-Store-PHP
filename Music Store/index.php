<?php
require 'php/functions.php';

$music_category = query("SELECT * FROM music_gear");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porfafor Music</title>
  <link rel="stylesheet" type="text/css" href="assets/Semantic UI/semantic.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <style>

  </style>
</head>

<body>
  <!-- Navbar Music Store -->
  <div class="ui sticky secondary menu " id="navbar">
    <a class="active item" href="index.php">
      Home
    </a>
    <a class="item" href="php/product.php">
      Product
    </a>
    <a class="item">
      About
    </a>
    <a class="item">
      Blog
    </a>
    <div class="right menu">

      <a href="" class="ui item">
        <i class="large icons" style="margin:auto;">
          <i class=" black shopping bag icon"></i>
          <i class="top right corner add icon"></i>
        </i>
      </a>
      <a class="ui item" href="php/login.php">
        <i class="large black sign-in icon" style="margin:auto;"></i>
      </a>
    </div>
  </div>

  <!-- Bacgkround Home  -->
  <div class="container-bg-home">
    <div class="bg-image-home">
      <br><br>
      <h1 class="ui inverted left header" style="font-size: 35px; margin-left:50px;">Play & Turn up the music!</h1>
      <p class="ui header inverted" style="margin-left:50px;">Music Store Sales people provide customer service for clientele shopping for musical instruments, both in the shop and online </p>
      <a href="php/login.php" style="color: white;">
        <button class="ui inverted basic icon button" aria-label="label" style="margin-left: 50px;">
          <i class="handshake outline icon"></i> Come join with us!
      </a>
    </div>
  </div>

  <!-- Category Music Store -->
  <div class="ui container category">
    <div class="ui doubling five column grid">
      <?php foreach ($music_category as $mc) : ?>
        <div class="column">
          <div class="ui fluid card">
            <div class="image">
              <img src="assets/img/<?= $mc['img_music_gear'] ?>">
            </div>
            <div class="content">
              <a href="php/product.php" class=" header center aligned"><?= $mc['nama_music_gear'] ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- New Realease Product -->
  <div class="ui container">
    <div class="ui  stackable grid">
      <div class="sixteen wide column center aligned">
        <h1>What's New</h1>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h1.jpg">
          </div>
        </div>
      </div>
      <div class="eight wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/new1.jpg">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h2.jpg">
          </div>
        </div>
      </div>
      <!-- second grid layout -->
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h3.png">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h4.jpg">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h5.jfif">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/h6.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <!-- banner page -->
  <div class="ui container bg-shop">
  </div>

  <br><br><br>

  <div class="ui container">
    <div class="ui grid stackable center aligned">
      <h1 style="margin:auto 0;"> #Feed Story Music</h1>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/clairo.jpg">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/selfie.png">
          </div>
        </div>
      </div>
      <div class="four wide column">
        <div class="ui fluid card">
          <div class="image imgrel">
            <img src="assets/img/billie.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>
  <div class="ui inverted footer vertical segment center">
    <div class="ui stackable center aligned page grid">
      <div class="four column row">


        <div class="column">
          <h5 class="ui inverted header">Products</h5>
          <div class="ui inverted link list">
            <a class="item">Registration Market</a>
            <a class="item">Sell Products</a>
            <a class="item">Buy Products</a>
          </div>
        </div>
        <div class="column">
          <h5 class="ui inverted header">Get in Touch</h5>
          <div class="ui inverted link list">
            <a class="item">Contacts</a>
            <a class="item">Social MEedia</a>
            <a class="item">Topic</a>
          </div>
        </div>
        <div class="column">
          <h5 class="ui inverted header">Community</h5>
          <div class="ui inverted link list">
            <a class="item">PPS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
          </div>
        </div>

        <div class="column">
          <h5 class="ui inverted header">Designed By</h5>
          <addr>
            <a href="https:/github.com/mochammadradhi">Mochammad Radhi Akbar</a> <br>
            <a href="https:/instagram.com/mochammadradhi"><i class="instagram large icon"></i></a>
            <a href="https:/twitter.com/mochammadradhi"><i class="twitter large icon"></i></a>
          </addr>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="assets/Semantic UI/semantic.min.js"></script>
  <script>
    $('.ui.sticky')
      .sticky({
        context: '#navbar'
      });
  </script>
</body>

</html>