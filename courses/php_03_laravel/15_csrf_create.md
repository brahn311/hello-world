[Inicio](../../) > [PHP con Laravel](./)

# CSRF

#### Cross-site request forgery
Tipo de ataque que consiste en que un usuario puede intentar hacer muchas peticiones en nombre de otro

Para esto Laravel genera con cada sesión un _token_ que se usará para:
- Validar Que exista el usuario en el sistema
- Validar Que sea _el usuario_ desde _nuestra app_ quien está haciendo la petición

Esto también implica que _otra app_ no pueda hacer peticiones POST

> **Nota!** El CSRF esta activado por defecto en Laravel

#### Añadir el CSRF helper
Si queremos que un form pueda pasar la seguridad CSRF de Laravel
Debemos agregar el helper
`@csrf`
a nuestro template

El helper nos agrega un _input hidden_ con un _token_ generado por Laravel

Para agregar el helper
`@csrf`
lo hacemos en el template, dentro del formulario

Por ejemplo, lo hacemos en nuestro
`\resources\views\expenseReport\create.blade.php`

> **Nota!** Si no añades el herper en el formulario,
al intentar guardar datos dara error `419`

#### Guardar en DB
Ahora en el controller
`app\Http\Controllers\ExpenseReportController.php`
Añadimos dentro del metodo
`public function show(Request $request)`

```php
$report = new ExpenseReport();
$report->title = $request->get('title');
$report->save();
```

#### Redireccionar luego de guardar
Cuando estamos guardando nuevas entradas en la base de datos podemos
redireccionar adonde queramos en nuestra aplicación con una respuesta especial de Laravel llamada
`redirect`

Ahora en el controller
`app\Http\Controllers\ExpenseReportController.php`

Dento del metodo
`public function show(Request $request)`
luego del
`$report->save();`
añadimos:

```php
return redirect('/expense_reports');
```

#### Desabilitar CSRF
Estos son _Middlewares_ los cuales son muy usados en aplicaciones web
Consisten pasar el contenido dentro del request a traves de distintas validaciones

Cuando llega un _request_ éste deberá pasar por distintos _Middlewares_ (capas o filtros).
Estos Middlewares al final regresarán una respuesta, donde pueden _permir_ o _detener_
el avance de las peticiones a la siguiente capa en caso de que _algo_ no se cumpla

Si no se desea usar la protección CSRF
se puede directamente quitar el middleware desde el archivo `kernel.php`

De la misma manera se pueden crear middleware propios y agregarlos
