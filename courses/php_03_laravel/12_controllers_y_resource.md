[Inicio](../../) > [PHP con Laravel](./)

# Controladores y recursos

Comenzaremos a darle las acciones de CRUD a nuestros reportes

#### CRUD:
- C = create (crear)
- R = read (leer)
- U = update (actualizar o editar)
- D = delete (eliminar)

Crearemos los controladores
Crearemos las rutas

Revisando los comandos make de artisan encontramos
`make:controller`

Buscaremos sus opciones:
`$ php artisan make:controller -h`

Revisando su ayuda obtenemos la opcion
`--resource`
que genera un clase controller como recurso

#### 1. Make Resource Controller
Usamos el comando
`$ php artisan make:controller ExpenseReportController --resource`

Al revisar el controlador, tenemos varios metodos creados:
-	`public function index()` Despliega todos los elementos a mostrar
-	`public function create()` Creará nuevos elementos
-	`public function store()` Guardará los elementos creados en create
-	`public function show()` Mostrará a detalle un solo elemento y por eso es que recibe un id
-	`public function edit()` Edita los elementos que mostramos en show
-	`public function update()` Almacena los cambios de edit en la base de datos
-	`public function destroy()` Eliminará los elementos

Podemos ver la lista de rutas creadas en nuestra app con el comando de artisan
`$ php artisan route:list`

#### 2. Add Routes
Vamos a crear ahora las rutas en nuestro archivo `routes\web.php`

No usamos get o post, sino directamente la estructura:
`Route::resource('/nombre_ruta', 'nombre_controlador');`
De esta manera se nos crearán rutas para cada uno de los métodos creados por el controlador resource.

Quedaria asi:
`Route::resource('/expense_reports', 'ExpenseReportController');`

Puedes comprobar de nuevo el listado de rutas con:
`$ php artisan route:list`

##### Test controller method
Ahora regresamos a nuestro controlador y en el metodo de `public function index()`
añadimos:
```php
return ExpenseReport::all();
```

Podemos encender nuestro serve `artisan serve` y realizar pruebas entrando a
`http://127.0.0.1:8000/expense_reports`
Debe aparecer el escapado el arreglo con el registro

#### 3. Template
En la carpeta `\recourses\views`
copiamos el template:
`welcome.blade.php`

Procedemos a crear una nueva carpeta con el nombre del modelo y dentro
pegamos el archivo como `index.blade.php`

El archivo debera quedar en la siguiente ruta:
`\recourses\views\expenseReport\index.blade.php`

> **Nota!** la idea es tener ordenadas las vistas que esten relacionadas

Podemos borrar el div del contenido y colocamos:
```php
<div class="content">
	<div class="row">
		<div class="col">
			<h1>Reports</h1>
			<table class="table">
				@foreach($expenseReports as $expenseReport)
					<tr>
						<td>{{ $expenseReport->title }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
```
#### 4. Update Controller method
Volvemos a nuestro `ExpenseReportController.php`
y modificamos el metodo `public function index()`
```php
public function index() {
	return view('expenseReport.index', [
		'expenseReports' => ExpenseReport::all()
	]);
}
```
