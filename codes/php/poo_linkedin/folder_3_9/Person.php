<?php

class Person
{
	private $name;
	private $familyname;
	private $phone;
	private $mobile;

	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
}

?>
