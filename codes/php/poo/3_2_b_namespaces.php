<?php

// ejercicio realizado hasta los 5:00 min...
// lo demas no fue echo poque genera error (corregir autoload, namespace, use)

spl_autoload_register(function($class){
  include 'php_poo_3_2_b_' . strtolower($class) . '.php';
});
// aqui estamos agregando la clase por medio del autoload

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
