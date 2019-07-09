[Inicio](../../) > [PHP con Laravel](./)

# Como funciona Blade

Blade es un motor de render HTML para php usado por Laravel

Tenemos que recordar que el rendereo es necesario al usar el patron MVC
(Modelo Vista Controlador).
Permitiendo tener por separado los componentes de la pagina web:
- La estructura (Modelo)
- Las plantillas o template (Vistas)
- Las acciones (Controladores)

> **Nota!** Profundizamos ese tema en `php_01_intro/34_mvc_creando_controllers`

Las plantillas de blade se reconocen por su extension
`template_name.blade.php` justo cuando se realiza el `view`

Primero que nada dedes observar que las templates de blade
son archivos PHP, y "en teoria" dentro de estos templates
puedes escribir scripts PHP. Aunque blade _lo permite_ no es una buen practica hacerlo

> **Nota!** No todas las librerias para render admiten scripts PHP.
Por ejemplo `Twig` _escapa_ los script por seguridad

#### Helpers
Los `helpers` son las _estructuras de control_ especificas de blade.
Estas se reconocen porque empiezan con el simbolo `@`

Ejemplo:
- `@if`
- `@elseif`
- `@endif`
- `@auth`

> **Nota!** Revisa la [documentacion de blade](https://laravel.com/docs/5.8/blade) para ver todos helpers

#### Variables
Puedes mandar variables al template al momento de hacer el rendereo
```php
Route::get('/text',function () {
	return view('welcome',[
		'saludo' => 'hola';
	]);
});
```
> **Nota!** Recuerda que los _Route_ los encuentras en `/routes/web.php`

Luego del _'template_name'_ y separado por  coma `,` agrega un arreglo con las variables que necesites

#### Renderear variables
Dentro del template para usar, mostrar e operar variables
solo debes colocar el simbolo `$` al _indice_ del arreglo recibido
`$saludo` (como si fuera una variable PHP)

Para escapar su contenido usa llaves dobles
- `{{ $saludo }}`

Por ejemplo:
```php
@isset($saludo)
{{ $saludo }}
@else
{{ 'No saludo' }}
@endisset
```
