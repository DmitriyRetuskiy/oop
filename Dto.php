<?php

//------------------------------------------------

class DtoDinmic{
	
	public array $arr;
	
	public function __construct(?array $arr=null){
		foreach($arr as $key=>$val)
		{
			$this->arr[$key] = $val;
		}
	}
	
	public function __set($name, $value){
		$this->arr[$name] = $value;
	}
	
	public function __get($value){
		return $this->arr[$value];
	}
	
}

$dto = new DtoDinmic(["name"=>"1231241"]);
echo $dto->name;



//-----------------------------------------------

class Dto{
	
	private ?string $data=null;

	private function __construct(?string $data = null){
		$this->data = $data;
	}
	
	public static function getObject($data)
    {
        return new self($data);
    }
	
	
}

//-----------best DTO---------------------------

// Enter your code here, enjoy!
class DtoObj{
	private $name;
	private $sername;
	private $phone;
	
	
	public function __construct($arr){
		$this->setName($arr['name']);
		$this->setSername($arr['sername']);
		$this->setPhone($arr['phone']);
		
	}
	
	public static function getDTO($arr){
		$dto = new self($arr);
		return $dto;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function setSername($sername){
		$this->sername = $sername;
		
	}
	
	public function setPhone($phone){
		$this->phone = $phone;
	}
	
	public function getName(){
		return $this->name;
	}
	
}

$arr = ['name' => 'Инван',
'sername' => 'Бунин',
'phone' => '234234'];

$obj = DtoObj::getDTO($arr);


echo $obj->getName() . "\n";
var_dump($obj);
//--------------------------------------------------------------------

$Person = Dto::getObject('ffdfdfdfdffd');
var_dump($Person);
