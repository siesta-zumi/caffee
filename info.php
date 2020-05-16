<?php
class Info {
  private $beanName;
  private $body;

  public function __construct($beanName, $body) {
    $this->beanName = $beanName;
    $this->body = $body;
  }

  public function getBeanName() {
    return $this->beanName;
  }

  public function getBody() {
    return $this->body;
  }
}

?>