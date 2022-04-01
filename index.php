<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@800&display=swap" rel="stylesheet">
    <title>学習サイト</title>
  </head>
  <body>
    <?php include "header.html"?>
    <div class="container text-center">
      <h2>今日のごはんは?</h2>
      <div class="row text-center interval">
        <div class="col-md-6">
          <a href="curry.php">
            <img  src="./image/23329407_s.jpg" alt="">
            <h5 class="item-name">カレーライス</h5>
          </a>
        </div>
        <div class="col-md-6">
          <a href="makizushiQ.php" >
            <img  src="./image/5154577_s.jpg" alt="">
            <h5 class="item-name">まきずし</h5>
          </a>
        </div>
        <div class="col-md-6">
          <a href="meatAndPotatoesQ.php" >
            <img  src="./image/893995_s.jpg" alt="">
            <h5 class="item-name">にくじゃが</h5>
          </a>
        </div>
        <div class="col-md-6">
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
