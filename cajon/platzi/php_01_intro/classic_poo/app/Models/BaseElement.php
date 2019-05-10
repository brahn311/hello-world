<?php

namespace app\Models;

require 'Printable.php';

class BaseElement implements Printable
// declaración de una clase
{
	private $title;
	private $description;
	private $months;
	protected $visible;
	// atributos de la clase
	// private se refiere a la accesibilidad, donde solo tienes acceso al atributo por medio de un método

	public function __construct($title = null, $description = null, $months = 0, $visible = null)
	// función mágica cuando se instancia un nuevo objeto con new
	// en caso de no tener parametros definidos, su valor se asignara por defecto 
	{
		$this->setTitle($title);
		$this->setDescription($description);
		$this->setMonths($months);
		$this->setVisible($visible);
	}

	// setters
	
	public function setTitle($title = null)
	{
		$this->title = $title;
	}

	public function setDescription($description = null)
	{
		$this->description = $description;
	}

	public function setMonths($months = 0)
	{
		$this->months = $months;
	}
		
	public function setVisible($visible = null)
	{
		if (is_bool($visible))
		{		
			// en caso de que manualmente se envié el valor booleano para el atributo visible
			$this->visible = $visible;
		}
		else 
		{
			// se evalua los atributos del objeto y se asigna el valor automaticamente		
			if (($this->title == 'N/A') || ($this->description == 'N/A') || ($this->months == '0'))
			{
				$this->visible = false;
			}
			else
			{
				$this->visible = true;
			}
		}
	}
	// los setters poseen valores por defecto en caso de que por error no sean especificado los valores

	// getters
	
	public function getTitle()
	{
		$title = is_null($this->title) ? 'N/A' : $this->title; 
		return "Title: $title\n";
	}

	public function getDescription()
	{
		$description = is_null($this->description) ? 'N\A' : $this->description;
		return "Description: $description\n";
	}

	public function getMonths()
	{
		$months = is_null($this->months) ? 'N\A' : $this->months;
		return "Months: $months\n";
	}
	
	public function getVisible()
	{
		$visible = ($this->visible == true) ? 'Yes' : 'No';
		return "Visible: $visible\n";
	}
	// estos getters estan usando la asignación de valor con el operador ternario

	public function visible()
	{
		return $this->visible;
		// usado en la interfaz Printable para ver si se imprime los datos en formato html
	}

	public function getDuration()
	{
		$years = floor($this->months / 12);
		$months = $this->months % 12;
		$duration = '';		
		if ($years > 0)
		{		
			$duration = "$years years";
		}		
		if ($months > 0) 
		{
			if ($duration <> '') $duration .= ', ';
			$duration .= "$months months";			
		}
		else
		{
			$duration .= '';
		}
		return $duration."\n";
	}
}
