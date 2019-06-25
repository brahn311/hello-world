# Fake PUT/PATCH

HTTP define un conjunto de métodos para peticiones
Usados para identificar o definir la acción que se desea realizar
para un recurso determinado

- PUT
- PATCH

#### PUT
El método _PUT_ reemplaza todas las representaciones actuales del recurso de destino con la carga útil de la petición.

#### PATCH
El método _PATCH_ es utilizado para aplicar modificaciones parciales a un recurso.

En Laravel cuando usamos `resourse` nos pone _Put_ y _Patch_
como una opción para modificar nuestros recursos

El problema de esto es que en un `form` no se puede especificar
directamente y solo nos deja hacer _GET/POST_

#### Fake PUT/PATCH
Laravel nos sugiere hacer un _Put/Patch_ para el manejo de `recourse`
y tambien nos ofrece un mecanismo para hacerlo, llamado _Fake PUT/PATCH_

Es necesario poner dentro del form de manera auxiliar:
`@method('metodo')`

Para comenzar editamos el template
`resourse\views\expenseReport\index.blade.php`

Luego del titulo, agregamos una nueva columna:
```html
<td>{{ $expenseReport->title }}</td>
<td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
```

#### Modificando el controller
- En el metodo `edit` del controlador añadimos:
```php
public function edit($id)
{
	$report = ExpenseReport::findOrFail($id);
	return view('expenseReport.edit', [
		'report' => $report
	]);
}
```

#### Formulario de edicion
- Hacemos una copia del template de:
`resourse\views\expenseReport\index.blade.php`

- Lo guardamos en la misma carpeta con el nombre
`edit.blade.php`

- Cambiamos el titulo `<h1>` del titulo:
```html
<h1>Edit Report {{ $report->id }}</h1>
```
Esto añade el numero de la cuenta a editar en el título

- Modificamos la accion:
```html
<form action="/expenseReports/{{ $report->id }}" method="POST">
```
- Ahora luego del helper:
`@csrf`
añadimos el _fake PUT/PATCH_:
```
@method('put')
```
Esto hace que laravel, al momento de recibir lo detecte como _PUT_


#### Guardando los cambios en DB
De regreso al controlador ahora modificamos el metodo `update`
añadimos como contenido:
```php
public function update()
{
	$report = ExpenseReport::find($id);
	$report->title = $request->get('title');
	$report->save();
	return redirect('/expense_reports');
}
```
