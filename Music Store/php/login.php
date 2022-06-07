<?php
session_start();
require('functions.php');

if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page Music Store</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assests/Semantic UI/semantic.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 50px;
    }


    div [class*="right floated"] {
      float: right;
      margin-right: 0.25em;
    }

    .ui .modal .content .description {
      width: 35% !important;
    }

    .bgimg {
      padding: 0 !important;
      background-image: url('../assets/img/background_img1.jpg');
      background-repeat: no-repeat;
      background-position-x: -90px;
      background-size: cover;
    }

    .content_title {
      padding: 20px;
      background: rgba(255, 255, 255, 0.8);
      width: 100%;
      height: 100%;
    }

    .ui .grid {
      padding: 0 !important;
      margin: 0 !important;
      height: 500px;
    }


    .content_title img {
      color: white;
      margin-top: 60px;
      position: absoulte;
      width: 130px;
    }

    .content_title_right {
      margin-top: 40px;
    }

    .footer_right {
      position: relative;
      bottom: -10px;
    }

    .ui[class*="very padded"].segment {
      padding: 0;
    }
  </style>
</head>

<body>
  <div class="ui raised very padded text container segment center aligned">
    <div class="ui grid">
      <div class="eight wide column bgimg">
        <div class="content_title">
          <img src="../assets/img/logo_music.png" alt="">
          <p class="ui header left aligned"> " Music Store Sales people provide customer service for clientele shopping for musical instruments, both in the shop and online "</p>
        </div>
      </div>
      <div class="eight wide column">
        <div class="content_title_right">
          <h3>Selamat Datang di Login Page</h3>
          <form class="ui form" method="POST">
            <?php if (isset($login['error'])) : ?>

              <div class="field error">
                <label class="ui left aligned header">Username</label>
                <input type="text" name="username" autofocus>
              </div>
              <div class="field error">
                <label class="ui left aligned header">Password</label>
                <input type="password" name="password">
              </div>
              <div class="field">
                <div class="ui checkbox left aligned">
                  <input type="checkbox" name="remember">
                  <label>Remember me?</label>
                </div>
              </div>
              <div class="field">
                Belum punya akun? <a href="register.php">Register disini</a>
              </div>
              <button class="ui primary button" type="submit" name="login">Login</button>
            <?php else : ?>
              <div class="field">
                <label class="ui left aligned header">Username</label>
                <input type="text" name="username" autofocus required>
              </div>
              <div class="field">
                <label class="ui left aligned header">Password</label>
                <input type="password" name="password" required>
              </div>
              <div class="field">
                <div class="ui checkbox left aligned">
                  <input type="checkbox" name="remember">
                  <label>Remember me?</label>
                </div>
              </div>
              <div class="field">
                Belum punya akun? <a href="register.php">Register disini</a>
              </div>
              <button class="ui primary button" type="submit" name="login">Login</button>
            <?php endif; ?>
          </form>
          <h4>OR Login Via</h4>
          <div class="four wide column">
            <button class="ui facebook button">
              <i class="facebook icon"></i>
              Facebook
            </button>

            <button class="ui twitter button">
              <i class="twitter icon"></i>
              Twitter
            </button>
          </div>

          <br>
        </div>
        <div class="footer_right">
          <div class="ui center floated horizontal list">
            <div class="disabled item" href="#">© Music, Store.</div>
            <a class="item" href="#">Terms</a>
            <a class="item" href="#">Privacy</a>
            <a class="item" href="#">Contact</a>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>

</html>