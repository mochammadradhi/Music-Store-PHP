<?php
require '../php/functions.php';
$result = cari($_GET['keyword']);
?>

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