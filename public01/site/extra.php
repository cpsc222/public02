<?php
class food {
	private $flavor;
	private $color;
	private $shape;
	
	public function __construct($flavor,$color,$shape){
		$this->flavor=$flavor;
		$this->color=$color;
		$this->shape=$shape;
	}
	
	public function setflavor($flavor){
		$this->flavor=$flavor;	
	}
	
	public function setcolor($color){
		$this->color=$color;	
	}
	public function setshape($shape){
		$this->shape=$shape;	
	}
	
	public function getflavor(){
		return $this->flavor;	
	}
	
	public function getcolor(){
		return $this->color;	
	}
	public function getshape(){
		return $this->shape;	
	}
}

	
	
?>
