<?php 

	class DirectorTest {

	    public function testCanBuildTruck()
	    {
	        $truckBuilder = new TruckBuilder();
	        $newVehicle = (new Director())->build($truckBuilder);

	        
	    }

	    public function testCanBuildCar()
	    {
	        $carBuilder = new CarBuilder();
	        $newVehicle = (new Director())->build($carBuilder);

	        
	    }
}

class WorkerPool implements Countable{

}

