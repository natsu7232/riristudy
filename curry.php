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
    <div>
      <h2>今日はカレーライスだよ!</h2>
      <div class="shopping-list">
        <P>カレールー 1つ</P>
        <P>じゃがいも 4つ</P>
        <P>にんじん 2つ</P>
        <P>たまねぎ 3つ</P>
        <br>
        <p class="allowance">お金:500円</p>
      </div> 
      
      <div class="shop-items">
        <form method="post" action="curryA.php">
        <?php foreach ($currys as $curry):?>
          <div class="shop-item min-center">
            <img src="<?php echo $curry->getImage() ?>" class="">
            <h4><?php echo $curry->getName()?></h4>
            <p><?php echo $curry->getPrice()?>円</p>
            <!--<input type="hidden" value="0" name="<?php echo $curry->getName()?>">-->
            <select class="count" name="<?php echo $curry->getName()?>">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="color">こ</span>
          </div>
        <?php endforeach ?>
      </div>
      
      
      <input type="submit" value="かくにん">
      </form>
    </div>
    <?php include "footer.html"?>
  </body>
</html>
