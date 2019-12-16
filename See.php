<?php

class Subject implements SplSubject{

	private $observers;

	public function attach(SplObserver  $observer){
		// if(!in_array($observer,$this->observers)){
			$this->observers[]=$observer;
		// }
	}

	public function detach(SplObserver  $observer){
		// if(false!=($index=array_search($observer,$this->observers)) ){
			unset($this->observers[$index]);
		// }
	}

	public function setCount($count){  
	        echo "数据量加" . $count;  
	}  

	public function setIntegral($integral){  
	    echo "积分量加" . $integral;  
	}


	public function notify(){

		foreach($this->observers as $observer){
			$observer->update($this);
		}
	}

}

class Observer1 implements SplObserver{

	public function update($subject){
		$subject->setCount(1);
	}
}

class Observer2 implements SplObserver{

	public function update($subject){
		$subject->setIntegral(10);
	}
}


$subject = new Subject();  
$subject->attach(new Observer1());  
$subject->attach(new Observer2());  
$subject->notify();//输出：数据量加1 积分量加10  
	    
