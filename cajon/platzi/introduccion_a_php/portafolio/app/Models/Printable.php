<?php

namespace app\Models;

interface Printable
// se declara similar a una clase
{
	public function visible();
	public function getTitle();
	public function getDescription();
	public function getMonths();
	//cualquier objeto que use esta interfaz, debe tener la funcion especificada y solo se especifica el nombre del metodo
	
}