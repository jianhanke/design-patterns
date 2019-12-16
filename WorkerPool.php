<?php 

class WorkerPool implements Countable
{
	private $occupiedWorks=array();
	private $freeWorks=array();

	public function get()
	{
		if(count($this->freeWorks)==0){
			$worker=new StringReverseWorker();
		}else{
			$worker=array_pop($this->freeWorks);
		}
		$this->occupiedWorks[spl_object_hash($worker)]=$worker;
		return $worker;
	}

	public function dispose($worker){

		$key = spl_object_hash($worker);

		if(isset($this->occupiedWorks[$key])){
		     unset($this->freeWorks[$key]);	
		}
		$this->freeWorks[$key]=$worker;
	}


	public function count(){
		return count($this->occupiedWorks)+count($this->freeWorks);
	}
}
class StringReverseWorker
{
    private  $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
$workerPool=new WorkerPool();

$work1=$workerPool->get();
// $work2=$workerPool->get();
$workerPool->dispose($work1);
$work2=$workerPool->get();
var_dump($work1==$work2);

$count=$workerPool->count();
var_dump($count);








