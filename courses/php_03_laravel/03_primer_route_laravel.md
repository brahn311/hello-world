[Inicio](../../) > [PHP con Laravel](./)

# Primera ruta en laravel

Ya teniendo:
- Nuestra VM encendida
- Laravel instalado
- La carpeta del proyecto creada

Ahora podemos activar mas rutas

### Route
En la carpeta raiz del proyecto encontramos la carpeta `\routes`

Dentro se encuentra un archivo llamado `web.php`

En ese archivo estan las rutas creadas

```php
Route::get('/',function () {
	return view('welcome');
});
```

En este codigo cuando se reciba la peticion con la url `/` se
enviara como respuesta el _render o redereo_ de la plantilla `welcome`

``Route``
especifica una regla donde al momento que se reciva una peticion url
se buscara cual de las reglas coinciden y enviara el resulado correspondiente

``return view`` realiza el la union entre una plantilla y los datos requeridos

### Views
Las plantillas estan ubicadas en la ruta `\resources\views`

En este caso la plantilla tiene el nombre `welcome.blade.php`
es decir, las plantillas poseen la extension `.blade.php`

> ¿que es blade?

A parte de la plantilla `return` puede enviar otros valores:

- Puede enviar un texto:
```php
Route::get('/text',function () {
	return 'text';
});
```
- Tambien puede enviar un arreglo:
```php
Route::get('/text',function () {
	return [
	'indice' => 'cero',
	'tipo' => 'arreglo',;
	]
});
```

Otros metodos de `Route` para usar:
- `Route::post`
- `Route::put`
- `Route::delete`
- `Route::any`
