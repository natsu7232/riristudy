<?php require_once('data.php')?>
<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="shopping.css">
    <title>学習サイト</title>
  </head>
  <body>
    <?php include "header.html"?>
    <div class="curry-main">
      <div class="curry-main">
        <h2>今日はやさいいためだよ!</h2>
        <h2>かうものをおぼえてね</h2>
        <div class="shopping-list">
          <P>おにく 1つ</P>
          <P>にんじん 2つ</P>
          <P>たまねぎ 2つ</P>
          <P>もやし 3つ</P>
          <p>フルーツ 1つ</p>
          <p>デザート 2つ</p>
          <br>
          <p class="allowance">お金:900円</p>
        </div> 
        <h4>900円ぴったりでかいものしてきてね!</h4>
        <input type="submit" onclick="location.href='./friedVegetables.php'" value="かいものに行く">
        </form>
      </div>
    </div>
    <?php include "footer.html"?>
  </body>
</html>
