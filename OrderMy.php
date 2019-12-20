<?php 

class Person{

	public $executes=array();
	public function addExecute($execute){
		$this->executes[]=$execute;
	}
	public function runExecute($index,$args){
		foreach($this->executes as $execute){
			$execute->onAction($index,$args);
		}
	}

}

Interface Action{
	public function onAction($index,$args);
}

class ShoutAction implements Action{
	public function onAction($index,$args){
		if($index!='Shout'){
			return false;
		}
		echo "我要大声喊了";
		return true;
	}
}
class SleepAction implements Action{
	public function onAction($index,$args){
		if($index!='Sleep'){
			return false;
		}
		echo "我要开始睡觉了";
		return true;
	}
}
$p=new Person();
$p->addExecute(new ShoutAction());
$p->addExecute(new SleepAction());
$p->runExecute('Shout',null);


