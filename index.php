<?php

require_once('data.php');
require_once('bean.php');


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
  <div class="menu-wrapper container">
    <h1 class="logo">Caféssimo Roastery TOKYO</h1>
    <h3>究極の<?php echo Bean::getCount() ?>種類のコーヒー豆</h3>
    <form action = 'confirm.php',method = 'post' >
      
      <div class="menu-items">
        <?php foreach ($beans as $bean): ?>

          <div class="menu-item">
            <img src="<?php echo $bean -> getImage() ?>">

            <h3 class="menu-item-name">
              <a href="show.php?name=<?php echo $bean->getName();?>">
                <?php echo $bean->getName() ?>
              </a>
            </h3>

            <p class="menu-item-type"><?php echo $bean->getType()?></p>

            <p>甘味</p>
              <?php for($s=0; $s<$bean->getSweet(); $s ++): ?>
              <img src="images/bean-image.jpg" class = 'icon-spiciness'>
              <?php endfor ?>

            <p>酸味</p>
              <?php for($a=0; $a<$bean->getAcid(); $a ++): ?>
              <img src="images/bean-image.jpg" class = 'icon-spiciness'>
              <?php endfor ?>

            <p>苦味</p>
              <?php for($b=0; $b<$bean->getBitter(); $b ++): ?>
              <img src="images/bean-image.jpg" class = 'icon-spiciness'>
              <?php endfor ?>

            <p class="price">¥<?php echo $bean -> getTaxIncludePrice() ?>(税込)</p>
            <input type= "text" value = 0 name = "<?php echo $bean -> getName() ?>">
            <span>個</span>
          </div>

        <?php endforeach ?>
      </div>
      <input type = 'submit', value = '注文する'>
    </form>

  </div>
</body>
</html>
