<?php
class Item{
  private $name;
  private $price;
  private $image;
  private $count = 0;
  private $total = 0;

  public function __construct($name,$price,$image){
   $this->name = $name;
   $this->price = $price;
   $this->image = $image;
  }
  
  public function getName(){
    return $this->name;
  }

  public function getImage(){
    return $this->image;
  }

  public function getCount(){
    return $this->count;
  }

  public function setCount($count){
    $this->count=$count;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getTotalPrice(){
    return $this->getPrice() * $this->count;
  }
    
  
}
?>