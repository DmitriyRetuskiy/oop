<?
// realise decision for task in sevice 
// It makes the controller shorter
class Service {
	public function summ(int $a,int $b):int
	{
		return $a + $b;
	}	
	
}


class Person {
	public Service $service; 
	
	public function __construct(){
		$this->service = new Service();
	}

	public function summ($a,$b) {
		return $this->service->summ($a,$b);
	}
	
}

$person = new Person();
echo $person->summ(3,5);