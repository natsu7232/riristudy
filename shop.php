<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@800&display=swap" rel="stylesheet">
    <title>学習サイト</title>
  </head>
  <body>
    <?php include "header.html"?>
    <div class="main">
      <h2>今日のごはんは?</h2>
      <div class="flx-box ">
        <div class="shop-item">
          <a href="curry.php">
            <img  src="./image/23329407_s.jpg" alt="">
            <h5 class="item-name">カレーライス</h5>
          </a>
        </div>
        <div class="shop-item">
          <a href="makizushiQ.php" >
            <img  src="./image/5154577_s.jpg" alt="">
            <h5 class="item-name">まきずし</h5>
          </a>
        </div>
        <div class="shop-item">
          <a href="meatAndPotatoesQ.php" >
            <img  src="./image/893995_s.jpg" alt="">
            <h5 class="item-name">にくじゃが</h5>
          </a>
        </div>
        <div class="shop-item">
          <a href="friedVegetablesQ.php" >
            <img  src="./image/4467438_s.jpg" alt="">
            <h5 class="item-name">やさいいため</h5>
          </a>
        </div>
      </div>
    </div>
    <?php include "footer.html"?>
    <!-- <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="test.js"></script> -->
  </body>
</html>
