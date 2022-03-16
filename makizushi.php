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
        <h2>おかいものメモを思い出してかいものしてね</h2>
        <div class="shop-items">
          <form method="post" action="makizushiA.php">
          <?php foreach ($makizushis as $makizushi):?>
            <div class="shop-item">
              <img src="<?php echo $makizushi->getImage() ?>" class="">
              <h4><?php echo $makizushi->getName()?></h4>
              <p><?php echo $makizushi->getPrice()?>円</p>
              <!--<input type="hidden" value="0" name="<?php echo $makizushi->getName()?>">-->
              <select class="count" name="<?php echo $makizushi->getName()?>">
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
        <h4>ぜんぶで850円になるかな？</h4>
        <input type="submit" value="かくにん">
        </form>
      </div>
    </div>
    <?php include "footer.html"?>
  </body>
</html>
