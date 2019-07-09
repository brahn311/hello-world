[Inicio](../../) > [PHP con Laravel](./)

# Request

Es el espacio de la memoria que contiene la información
que llegan al servidor cuando se realiza alguna petición al mismo

Puede contener datos recibidos datos de la URL y por formularios GET, POST

Podemos hacer pruebas en el `DashboardController.php`

Por ejemplo:
`http://localhost/dashboard?parametro=abrahan`


#### Capturar el request
Para usar `request` debes declarar su uso,

```php
use Illuminate\Http\Request;
```

> **Nota!** si no declaras el `use` no reconocera a que libreria pertenecer el `Request`

Dentro de la `class DashboardController` agregamos la funcionalidad:
```php
public function index(Request $request)
{
	$parametro = $request->query('parametro', 'default');
	dd($parametro);
	return $parametro;
}
```
- El metodo `index` recibe unos parametros de entrada `(Request $request)`
Implica que la variable `$request` tiene casting y debe pertenercer a la case `Request`
- `dd` es un helper de laravel, genera una salida por pantalla
le da formato a esta y detiene la ejecucion del script
una funcion similar a:
```php
var_dump($parametro);
die;
```

Todo el metodo index con el request lo podriamos simplificar:
```php
public function index(Request $request)
{
	return $request->query('parametro', 'default');
}
```

> **Nota!** Los request seran usados durante todo el desarrollo del proyecto
