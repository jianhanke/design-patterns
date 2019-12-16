<?php 

class Lesson{

	public $day;
	public $strategy;

	public function __construct($day,$strategy){
		$this->day=$day;
		$this->strategy=$strategy;
	}

	public function start(){
		$this->strategy->start($this);
	}

}
class Math{

	public function start(Lesson $lession){
		echo "星期$lession->day,开始上数学课<br />";
		
	}
}

class English{

	public function start(Lesson $lession){
		echo "星期$lession->day,开始上英语课<br />";
	}
}

$lession=new Lesson(5,new Math());	
$lession->start();

$lession=new Lesson(1,new English());	
$lession->start();
