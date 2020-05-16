<?php

require_once('bean.php') ;

require_once('data.php');

$beanName = $_GET['name'];

$bean = Bean::findByName($beans, $beanName);

$beanInfo = $bean->getInfomation($infos);


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Caféssimo Roastery TOKYO</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper container">
   
    <img src="<?php echo $bean->getImage() ?>" class="menu-item-image">
    <h3 class="menu-item-name"><?php echo $bean->getName() ?></h3>
    <p class="menu-item-type"><?php echo $bean->getType() ?></p>

   
    <p class="price">¥<?php echo $bean->getTaxIncludePrice() ?></p>
    <a href="index.php">← メニュー一覧へ</a>
  </div>

  <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <h4>商品詳細</h4>
        </div>

        <?php foreach($beanInfo as $info): ?>
          <div class="review-list-item">
            <h3><?php echo $info ->getBeanName()?>の特徴:</h3>
            <p> <?php echo $info -> getBody() ?></p>
        </div>
        <?php endforeach ?>

      </div>
    </div>
</body>
</html>