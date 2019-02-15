<?php

// con todo esto pretendemos en una sola instancia, usar dos clases y metodos de nombres similares resolviendo sus nombres

include_once ('3_2_b_myclass.php');
include_once ('clases_3_2_b/myclass.php');
// aqui estamos agregando la clase sin el autoload
// Esto podemos hacerlo con el autoload como en el ejercicio, pero por errores de nombre de archivo no lo use

use clases_3_2_b\MyClass as EMyclass;

// implementamos la clase en una clase Main
class Main
{
  public $posts;
  public $Eposts;

  public function __construct()
  {
    $this->posts = new MyClass;

    // $this->posts = new clases_3_2_b\Myclass;
    // si no usamos use, debemos llamar el nombre completo de la clase, pero es preferible acceder usando el use
    // con el use, mantenemos el codigo limpio y legible y al momento de cambiar el spacename , lo cambiamos en un solo sitio
    $this->Eposts = new EMyClass;

  }
}

$app = new Main;
// $app es una instancia de la clase Main
// y a su vez, al instanciar el objeto su atributo $posts es un objeto de la clase Myclass
// MyClass pertenece a 3_2_b_myclass
// EMyClass pertenece al namespace 3_2_b\myclass.php

$app->posts->greet();
$app->Eposts->greet();
// aqui accedemos al metodo greet de distintas clases que se llaman igual en el mismo script

?>
