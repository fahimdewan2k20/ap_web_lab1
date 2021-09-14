<?php
class Car {
  public $engineNo;
  public $model;
  public $owner;

  function __construct($engineNo, $model, $owner) {
    $this->engineNo = $engineNo;
    $this->model = $model;
    $this->owner = $owner;
  }

  function ShowInfo() {
    echo "Engine No: " . $this->engineNo . "<br>";
    echo "Model: " . $this->model . "<br>";
    echo "Owner: " . $this->owner . "<br><br>";
  }
}
?>
