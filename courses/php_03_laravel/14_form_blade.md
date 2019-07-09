[Inicio](../../) > [PHP con Laravel](./)

# Form para agregar reportes
Recapitulando, nosotros ya hicimos el index para mostrar lo almacenado,
pero almacenamos usando `artisan tinker`
Ahora crearemos el formulario

#### Enlace al formulario
En nuestro template de blade `expenseReport/index.blade.php`
Primero creamos un nuevo enlace tipo boton para enviarnos al formulario

Lo agregamos dentro del `@section('content')`
despues del `row` del titulo y antes del `row` del contenido del row con la tabla

Reestructurando el codigo asi:
```html
<div class="row">
	<div class="col">
		<h1>Reports</h1>
	</div>
</div>
<div class="row">
	<div class="col">
		<a class="btn btn-secondary" href="/expense_reports/create">Create a new report</a>
	</div>
</div>
```

#### Creando el formulario
Duplicamos el template anterior con el nuevo nombre de `create.blade.php`

- Modificamos el titulo:
```html
<h1>New Report</h1>
```

- Modificamos el enlace para que regrese al listado de reportes
```html
<a class="btn btn-primary" href="/expense_reports">Back</a>
```

- Borramos la tabla y hacemos el formulario
```html
<div class="row">
	<div class="col">
		<form action="/expense_reports" method="POST">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
			</div>
			<button class="btn btn-primary" type="submit" >Submit</button>
		</form>
	</div>
</div>
```

#### Actualizando el controlador
En el controlador modificamos el metodo `public function create()`
```php
public function create()
{
	return view('expenseReport.create');
}
```
