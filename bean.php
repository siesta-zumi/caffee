<?php
class Bean {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  private static $count = 0;
  private $type;



  public function __construct($name, $price, $image, $type, $sweet, $acid, $bitter) {
    $this -> name = $name;
    $this -> price = $price;
    $this -> image = $image;
    $this -> type = $type;
    $this -> sweet = $sweet;
    $this -> acid = $acid;
    $this -> bitter = $bitter;

    self::$count ++;

    
  }

  public function getName() {
    return $this -> name;
  }

  public function getImage() {
    return $this -> image;
  }

  public function getOrderCount() {
    return $this -> orderCount;
  }


  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }

  public function getTaxIncludePrice() {
    return floor($this -> price * 1.1);
  }

  
  public function getTotalPrice() {
    return $this->getTaxIncludePrice() * $this->orderCount;
  }

  public static function getCount() {
    return self::$count;
  }

  public function getType() {
    return $this -> type;
  }
  public function setType($type) {
    return $this ->type = $type;
  }

  public function getSweet() {
    return $this ->sweet;
  }

  public function getAcid() {
    return $this ->acid;
  }

  public function getBitter() {
    return $this ->bitter;
  }

  public static function findByName($beans,$name) {
    foreach ($beans as $bean) {
      if ($bean-> getName() == $name) {
        return $bean;
      }
    }
  }
  public function getInfomation($infos) {
    $infoForBeans = array();
    foreach ($infos as $info){
      if($info->getBeanName()==$this->name){
        $infoForBeans[]=$info;
      }
    }
    return $infoForBeans;
  }

}



?>

