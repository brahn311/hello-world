<?php
class Person
{
	private $name;
	private $familyname;
	private $phone;
	private $mobile;
	// observe que todas las variables estan en minusculas	
	
	public function __construct($name, $familyname, $phone, $mobile)
	{
		$this->name = $name;
		$this->familyname = $familyname;
		$this->phone = $phone;
		$this->mobile = $mobile;
	}
	
	public function __toString()
	{
		return $this->name . " " . $this->familyname . ", " . $this->phone . " o " . $this->mobile . "\n";
	}
	
	/*
	// podremos crear un metodo recuperar para cada atributo privado, aunque usaremos la sobrecarga
	public function getName()
	{
		return $this->name . "\n";
	}
	*/
	
	// sobrecarga en php se refiere a la capacidad de generar metodos y argumentos dinamicos
	
	public function __call($name, $argument)
	// activa esta funcion cuando se accede a un metodo que no se encuentra definido
	// recibe dos parametros: nombre del metodo llamado, y los argumentos de ese metodo
	{
		// bandera de error para cuando no hay definida ninguna funcionalidad para el nombre solicitado
		$no_method = true;
		
		// capturamos las primeras 3 letras del nombre del metodo solicitado 		
		$method_name = substr($name, 0, 3);
		
		// validamos el nombre del metodo solicitado y le otorgamos la funcionalidad
		if ($method_name == "get")
		{
			// bandera en caso que el nombre si tenemos el una funcionalidad definida para ese metodo
			$no_method = false;
			
			// el contenido restante sera el nombre del atributo que deseamos extraer
			$real_name = substr(strtolower($name), 3);
			// el nombre del metodo sollicitado, omitiendo los primeros 3 caracteres en minusculas
			
			return $this->$real_name . "\n";
		}
		
		// en caso de que no encontremos ninguna funcionalidad definida dinamicamente y mostramos error
		if ($no_method)
		{
			throw Exception("Metodo {$name} no encontrado");
		}
	}	
}

$yo = new Person('Abrahan','Omana','2516461','4267149976');
echo $yo;
// accediendo a los metodos dinamicos creados con __call
echo $yo->getName();
echo $yo->getFamilyname();
echo $yo->getPhone();
echo $yo->getMobile();

?>
