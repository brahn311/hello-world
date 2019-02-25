<?php

class Person
{
	private $name;
	private $familyname;
	private $phone;
	private $mobile;

	public function __construct($name, $familyname, $phone, $mobile)
	{
		$this->name = $name;
		$this->familyname = $familyname;
		$this->phone = $phone;
		$this->mobile = $mobile;
	}

	public function __toString()
	{
		return $this->name . " " . $this->familyname. "," . $this->phone. " o " . $this->mobile . "\n";
	}

	public function __call($name, $arguments)
	{
		$no_method = true;

		$method_name = substr($name, 0, 3);

		if( $method_name == 'get' )
		{
			$no_method = false;
			$real_name = substr(strtolower($name), 3);
			#return $this->$real_name . "\n";
			// comentado porque el salto de linea en la prueba de PersonTest.php hehco con PHPUnit genera error
			return $this->$real_name;
		}

		if($no_method)
		{
			throw new Exception("Metodo {$name} no encontrado");
		}

	}

}

?>
