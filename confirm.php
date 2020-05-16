<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($beans as $bean): ?>
      <?php 
        $orderCount = $_GET[$bean->getName()];
        $bean->setOrderCount($orderCount);
        $totalPayment += $bean->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $bean->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $bean->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <h3>合計金額: <?php echo $totalPayment ?>円</h3>
    <a href="index.php">← メニュー一覧へ</a>
  </div>
</body>
</html>