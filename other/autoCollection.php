<?php
// Получат все классы пользователя в коллекцию;
// свойства коллекции 
class A{
	public const NAME = 'this is A ';
}

class B{
	public const NAME = 'This is B '; 
}

class C{
	public const NAME = 'This is C '; 
	
	public function getName(){
		return self::NAME;
	}
}

class Point{
	
	public $x;
	public $y;
	public $z;
	
	public function returnPoint(){
		return ['x' => $this->x, 'y' => $this->y, 'z' => $this->z];
	}
}

class Collection{
	
	public ?array $arr  = [];
	
	public function __construct(){
		
		$userDefinedClasses = array_filter(
		    get_declared_classes(),
		    function($className) {
		        return !call_user_func(
		            array(new ReflectionClass($className), 'isInternal')
		        );
		    }
		);
		
		foreach($userDefinedClasses as $objName){
			if($objName != 'Collection')
			{
				$this->arr[$objName] = new $objName;
			}
		}

	}

	public function __set($name,$val){
		$this->arr[$name] = $val;
	}
	
	public function __get($name){
		return $this->arr[$name];
	}
}

$collection = (new Collection);





var_dump($collection->A::NAME);
var_dump($collection->C->getName());
$collection->Point->x = 3;
$collection->Point->y = 4;
$collection->Point->z = 3;

var_dump($collection->Point);