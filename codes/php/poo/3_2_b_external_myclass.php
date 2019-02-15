<?php

// al hacer esta practica dio error....

namespace external;

class Myclass
{
    const PLATAFORM = 'facebook';
    private $posts;

    function __construct()
    {
      $this->posts = ["Estoy en la playa\n",
                      "Me he comprado un nuevo ordenador\n"
      ];
    }

    public function getMyPosts()
    {
      return $this->posts;
    }

    public function greet()
    {
      echo "Hola... (Enviado desde External)\n";
    }
}

?>
