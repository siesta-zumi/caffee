<?php 
require_once('bean.php');
require_once('info.php');

$ethiopia = new Bean('エチオピア', 800, 'images/ET.svg', 'ライトロースト', 4, 4,2);
$guatemala = new Bean('グァテマラ', 850, 'images/gt.png','ミディアムロースト', 3, 3, 3);
$costa_rica = new Bean('コスタリカ', 700, 'images/CR.svg', 'ミディアムロースト',3, 4, 3);
$brazil = new Bean('ブラジル', 600, 'images/br.png', 'ダークロースト',3, 2 ,5);


$beans = array($ethiopia, $guatemala, $costa_rica, $brazil);

$EP = new Info(
  $ethiopia->getName(), 
  'エチオピアの独特な酸味が特徴的！'
);

$GM = new Info(
  $guatemala->getName(),
   '味わいのバランスがよくコーヒーが苦手な人にもおすすめ'
);

$CR = new Info(
  $costa_rica->getName(),
   '味わいのバランスがよくコーヒーが苦手な人にもおすすめ'
);

$BZ = new Info(
  $brazil->getName(),
   '味わいのバランスがよくコーヒーが苦手な人にもおすすめ'
);

$infos = array($EP, $GM, $CR, $BZ);

?>