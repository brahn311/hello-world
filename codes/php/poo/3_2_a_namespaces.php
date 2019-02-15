<?php

require_once('3_2_a_myclass.php');
// aqui estamos agregando la clase por medio del metodo antiguo

use MyNamespace\Myclass;
// debemos usar hacerlo con cada clase usando su nombre completo (nombre del namespace, barra invertida, nombre de la clase)

// implementamos la clase en una clase Main
class Main
{
  public $posts;

  public function __construct()
  {
    $this->posts = new Myclass;
    // si no usamos use, debemos llamar el nombre completo de la clase asi:
    // $this->posts = new MyNamespace\Myclass;

  }
}

$app = new Main;
// $app es una instancia de la clase Main
// y a su vez, al instanciar el objeto su atributo $posts es un objeto de la clase Myclass
// y MyClass pertenece a un namespace llamado MyNamespace...

$app->posts->greet();
// aqui accedemos al metodo greet de MyNamespace\Myclass ubicado en php_poo_3_2_namespaces.php
// todo esto es muy util para ordenar clases, pero afecta al entender el codigo

?>
