<?php
	class student{
	private $fname;
	private $lname;
	private $id;
	private $courses;

	public function __construct($fname, $lname, $id, $courses){
	$this->setfname($fname);
	$this->setlname($lname);
	$this->setid($id);
	$this->setCourses($courses);
	}

	public function setfname($fname){
	$this->fname = $fname;
	}

	public function setlname($lname){ 
        $this->lname = $lname;
        }
	
	public function setid($id){
	$this->id = $id;
	}

	public function setCourses($courses){
	$this->courses = $courses;
	}




	public function getfname(){
	return $this->fname;
	}

	public function getlname(){
	return $this->lname;
	}	

	public function getid(){
	return $this->id;
	} 

	public function getCourses(){
	return $this->courses;
	}
}
?>

