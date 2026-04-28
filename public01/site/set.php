<?php

class wood{
private $color;
private $tree;
private $price;

public function __construct($color, $tree, $price){
$this->color=$color;
$this->tree=$tree;
$this->price=$price;
}

public function setcolor($color){
$this->color=$color;
}
public function settree($tree){
$this->tree=$tree;
}
public function setprice($price){
$this->price=$price;
}

public function getcolor(){
return $this->color;
}

public function gettree(){
return $this->tree;
}

public function getprice(){
return $this->price;
}
}

?>
