# Controladores en Laravel

En el archivo `/routes/web.php` se define el comportamiento del portal

Entre estos comportamientos esta las configuracion de las `Routes` (rutas url)

> **Nota!** La idea no es hacer los render `return view()` desde `/routes/web.php`

Siguiendo con el patron de trabajo MVC, la funcion de los routes es llamar a los controladores.
Estos seran los encargados de hacer los procesos y enviarlos a rendear

> **Nota!** Recuerda que para ver todos los comandos usamos
`$ php artisan`

Para ver la ayuda especifica de un comando usamos
`$ php artisan comando --help`

#### make:controller
Primero debemos crear el controladores con un comando de artisan `make:controller`

El comando `$ php artisan make:controller NameController` para crear un controller,
creara nuevo archivo _practicamente vacio_ con el nombre especificando de controlador usado en el comando

El ruta del archivo creado sera `/app/Http/Controllers/NameController.php`

Como practiva crearemos 2 controladores:
- HomeController: pagina de inicio
- DashboardController: tablero del control del portal

Luego configuramos `/routes/web.php` añadiendo las rutas para llamar a los metodos del controlador
```php
Route::get('/','HomeController@index')
Route::get('/dashboard','DashboardController@index')
```

- `/` es la url
- `HomeController` es el controlador
- `@` es el separador e indica que metodo usar
- `index` es el metodo o accion a ejecutar
