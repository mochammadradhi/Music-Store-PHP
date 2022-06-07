<?php
require 'functions.php';
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
$id = $_GET['id'];
$profile = query("SELECT * FROM user WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic UI/semantic.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="ui sticky secondary menu " id="navbar">
    <a class="item" href="index_login.php">
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
          <i class="large black user icon"></i>
        </a>
      <?php else : ?>
        <a class="ui item active" href="profile.php">
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
          <i class=" black sign-out icon"></i>
        </i>
      </a>
    </div>
  </div>
  <div class="ui grid">
    <div class="five column row"></div>
    <div class="sixteen wide column centered" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(24,24,93,1) 35%, rgba(0,212,255,1) 100%);">
      <img class="ui medium circular image" src="../assets/img/user.png" style="width: 150px; margin:auto">
      <h2 class="ui header inverted center aligned"><?= $profile['username'] ?></h2>
    </div>
    <div class="five column row">
    </div>
    <div class="five wide column">
      <div class="ui container">
        <div class="ui vertical pointing menu" style="margin:auto;">
          <a class="active item">
            Profile
          </a>
          <a class="item">
            Edit
          </a>
          <a class="item">
            Friends
          </a>
        </div>
      </div>


    </div>
    <div class="six wide column">
      <h3 class="ui horizontal divider header">
        <i class="user icon"></i>
        Profile
      </h3>
      <br>
      <table class="ui definition table">
        <tbody>
          <tr>
            <td class="two wide column">username</td>
            <td><?= $profile['username'] ?></td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>example@mail.com</td>
          </tr>
          <tr>
            <td>password</td>
            <td>**********</td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td>087-813-162-xxx</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="five wide column">
      <div class="ui container">
        <div class="ui feed">
          <div class="event">
            <div class="label">
              <img src="../assets/img/user.png">
            </div>
            <div class="content">
              <div class="summary">
                <a class="user">
                  Elliot Fu
                </a> added you as a friend
                <div class="date">
                  1 Hour Ago
                </div>
              </div>
              <div class="meta">
              </div>
            </div>
          </div>
          <div class="event">
            <div class="label">
              <img src="../assets/img/user.png">
            </div>
            <div class="content">
              <div class="summary">
                <a>Helen Troy</a> added <a>2 new illustrations</a>
                <div class="date">
                  4 days ago
                </div>
              </div>

            </div>
          </div>
          <div class="event">
            <div class="label">
              <img src="../assets/img/user.png">
            </div>
            <div class="content">
              <div class="summary">
                <a class="user">
                  Jenny Hess
                </a> added you as a friend
                <div class="date">
                  2 Days Ago
                </div>
              </div>
            </div>
          </div>
          <div class="event">
            <div class="label">
              <img src="../assets/img/user.png">
            </div>
            <div class="content">
              <div class="summary">
                <a>Joe Henderson</a> posted on his page
                <div class="date">
                  3 days ago
                </div>
              </div>
              <div class="extra text">
                Ours is a life of constant reruns. We're always circling back to where we'd we started, then starting all over again. Even if we don't run extra laps that day, we surely will come back for more of the same another day soon.
              </div>

            </div>
          </div>
          <div class="event">
            <div class="label">
              <img src="../assets/img/user.png">
            </div>
            <div class="content">
              <div class="summary">
                <a>Justen Kitsune</a> added <a>2 new photos</a> of her store
                <div class="date">
                  4 days ago
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic UI/semantic.min.js"></script>
</body>

</html>