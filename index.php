<?php
class Person
{
	
	public function __construct(
		?string $name = null,
		?string $sername = null,
		?string $str = null
	)
	{
		$this->sername = $sername;
		$this->str = $str;
		$this->name = $name;
		
	}
	
	public function getName()
	{
		$this->str .= $this->name . ' ';
		return $this;
	}
	
	public function getSername()
	{
		$this->str .= $this->sername . ' ';
		return $this;
	}
	
	public function getStr()
	{
		return $this->str;
	}
	
}

class DI{
	
	public function __construct(){
		$person = new Person('mmm');
		$this->name = $person->name;
	}
	

}

class ST {
	
	
	public ?string $name = null;
	
	public function __construct(Person $person){
		$this->name = $person->name; // присвоили имя из объекта персоны
	}
	
	public function getName(){
		return $this->name; 
	}
	
}


$Person = new Person('Иван','Бунин');

$DI = new DI();

$ST = new ST(new Person('ST'));



	echo $Person->getName()->getSername()->getStr() . '<br />';
	echo $DI->name . '<br />';
	echo $ST->name . '<br />';

?>