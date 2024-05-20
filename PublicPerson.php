<?php
Class PublicPerson{
	
	public function __construct(
		?string $name = null,
		?string $sername = null,
		?string $phone = null
	){
		$this->name = $name;
		$this->sername = $sername;
		$this->phone = $phone;
	}
	
	public function echoName(){
		echo $this->name;
	}
}