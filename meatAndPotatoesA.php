<!-- コピー -->
<?php require_once('data.php')?>

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="shopping.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <title>学習サイト</title>
  </head>
  <body>
    <?php include "header.html"?>
    <div class="main">
      <h2>上手におかいものできたかな？</h2>
      <div class="shopping-list shopping-answer">
        <P>じゃがいも 3つ</P>
        <P>おにく 1つ</P>
        <P>たまねぎ 2つ</P>
        <P>りんご 1つ</P>
        <p>ケーキ 1つ</p>
        <br>
        <p class="allowance">お金:700円</p>
      </div> 
      
      <div class="total">
        <?php $total = 0; ?>
        <?php $counts = array(); ?>

        <?php foreach($meatAndPotatoes as $meatAndPotatoe):?>

          <?php
          $count = $_POST[$meatAndPotatoe->getName()];
          $meatAndPotatoe->setCount($count);
          $total += $meatAndPotatoe->getTotalPrice();?>

          <?php if($count == 0):?> 
            <?php continue; ?>
          <?php else: ?>
            <p><?php echo $meatAndPotatoe->getName()?>
            &nbsp;&nbsp;
            <?php echo $count ?>
            こ</p>
          <?php endif ?>
          
        <?php endforeach ?>
        <h3>合計&nbsp;:&nbsp; <?php echo $total ?>円</h3>
      </div>
      <div class="end">
        <h2>ほかのおかいものもやってみてね</h2>
        <input type="buttom" onclick="location.href='./shop.php'" value="おかいものへ" >
        <input type="button" onclick="history.back()" value="もう一回する">
      </div>
    </div> 
    <?php include "footer.html"?>
  </body>
</html>
