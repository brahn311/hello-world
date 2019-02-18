<?php

namespace clases_3_2_b;
// el un namespace no puede empezar con numero

class MyClass
{
    const PLATAFORM = 'facebook';

    private $posts;

    function __construct()
    {
      $this->posts = ["Estoy en la playa\n",
                      "Me he comprado un nuevo ordenador\n"];
    }

    public function getMyPosts()
    {
      return $this->posts;
    }

    public function greet()
    {
      echo "Hola... (Enviado desde la clase Externa...)\n";
    }
}

?>
