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
    <div calss="main">
      <div class="curry-main">
      <h2>おかいものメモを<span class="br"></span>思い出してかいものしてね</h2>
        
        <div class="shop-items">
          <form method="post" action="friedVegetablesA.php">
          <?php foreach ($friedVegetables as $friedVegetable):?>
            <div class="shop-item">
              <img src="<?php echo $friedVegetable->getImage() ?>" class="">
              <h4><?php echo $friedVegetable->getName()?></h4>
              <p><?php echo $friedVegetable->getPrice()?>円</p>
              <select class="count" name="<?php echo $friedVegetable->getName()?>">
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
    </div>
    <?php include "footer.html"?>
  </body>
</html>
