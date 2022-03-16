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
        <h2>今日はにくじゃがだよ!</h2>
        <h2>かうものをおぼえてね</h2>
        <div class="shopping-list">
          <P>おにく 1つ</P>
          <P>じゃがいも 3つ</P>
          <P>たまねぎ 2つ</P>
          <p>フルーツ 1つ</p>
          <P>デザート 1つ</P>
          <br>
          <p class="allowance">お金:700円</p>
        </div> 
        <h4>700円ぴったりでかいものしてきてね!</h4>
        </div>
        <input type="submit" onclick="location.href='./meatAndPotatoes.php'" value="かいものに行く">
        </form>
      </div>
    </div>
    <?php include "footer.html"?>
  </body>
</html>
