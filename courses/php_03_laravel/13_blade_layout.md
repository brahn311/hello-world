# Blade layout

Usaremos el concepto de diseños para organizar los templates de blade

#### Creando la carpeta de diseños
El objetivo es tener una donde ubiquemos
`\resources\views`
que almacena los diseños bases necesarios para armar paginas

la ruta de nuestros diseños sera:
`\resources\views\layout`

#### Creando un template base
Dentro nuestra carpeta
`\resources\views\layout`
creamos un archivo `base.blade.php`

Buscamos el [Starter template](https://getbootstrap.com/docs/4.3/getting-started/introduction/)
en la documentacion de bootstrap,
lo copiamos y pegamos dentro de nuestro archivo base

Dentro del template ubicamos donde debera esta declarado el container
y agregamos el helper de blade que entregara el contenido
`@yield('content')`
indicando que `content` no esta definido
y se obtiene este del hijo y se debe insertar lo inserta

> **Nota!** los helpers de blade no requieren terminar en `;` _(punto y coma)_

#### Extender plantillas
Cuando ya tenemos una plantilla base, podemos usarla en otros template

Al inicio de una plantilla (en la primera linea)
antes de otros codigos añadimos el helper
`@extends`
que es una funcion para indica que esa plantilla (hijo)
se crea a partir de otra pantilla base (padre)

> **Nota!** Blade combinara ambos codigos

La instruccion completa del helper debe ser:
`@extends('folder_name.template_name')`

> **Nota!** `folder_name`
se refiere a la ruta de carpetas dentro de `\resources\views`
`template_name` es el nombre del template sin la extension `.blade.php`

Como tenemos ya la base que vamos a heredar del padre
dejamos solo el contendio del contenedor
borrando cualquir otro contenido
_menos_ el contendio del container _(incluyendo el container)

#### Seccion
Debemos marca el inicio y el fin del contenido para ubicarlo en un lugar especifico

Esta seccion se coloca en los template _(hijos)_
e indica el contenido que se insertara en el template base _(padre)_

Usamos los helpers
- `@section('content')` al inicio del contenido
- `@endsection` al final del contenido

Dentro de seccion pegamos el contenido que cortamos de container

---
Este procedimiento lo debemos hacer en los template que necesitemos,
como en el caso de:
`resource\views\expenseReport\index.blade.php`
