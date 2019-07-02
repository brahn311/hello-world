# Validaciones

Validaremos el formulario y incluiremos los mensajes de error
- En el caso de que el usuario envie un formulario vacio
- Para que temer un minimo de caracteres
- Para eliminar el error y dar salida html y evitar la pantalla del debug

#### Valdiar Request
Los request poseen un metodo llamado `validate()` para validar
que recibe como parametros un arreglo compuesto de `'parametro' => 'regla'`

`validate()` filtrará los parametros con las reglas de validacion
 y retorna al formulario en caso de error

En el archivo del controlador
`app\Http\Controller\ExpenseReportController.php`
dentro del metodo
`public function store(Request $request)`
decretamos la validacion antes de instanciar
`$report `
agregamos:
```php
public function store(Request $request)
{
	$validData = $request->validate([
		'title' => 'required'
	]);
	$report = new ExpenseReport();
```
- `'required'` no permite que el parametro este validacion

Tambien podemos añadir mas validaciones en el arreglo dentro de `$validData`
podemos concatenar otras validaciones al mismo parametro usando el operador `|`

Quedando la validacion de la siguiente manera
```php
$validData = $request->validate([
	'title' => 'required|min:3',
	'content' => 'bail|required|max:255'
]);
```
- `'min:[value]'` valida que se posea un minimo tantos caracteres segun `value`
- `'max:[value]'` limita la cantidad maxima de caraceres segun `value`
- `'bail'` interumpe la las validaciones posteriores su alguna condicion no se cuple

> **Nota!** el orden de las reglas _SI_ importa

Puedes ver todas las
[reglas de validacion](https://laravel.com/docs/5.8/validation#available-validation-rules)
en la documentacion de Laravel

#### Manejando los errores
Cuando se presentan errores Laravel genera automaticamente un objeto llamado `$errors`
pero por default no nos muestra ningun aviso del error

Para mostrar los errores en validacion debes editar el template
`resource\views\expenseReports\create.blade.php`

Antes del tag `<form>` debes añadir:
```html
@if($errors->any())
    <div class="alert alert-danger">
		Error
    </div>
@endif
```
- Con esto ya mostramos la palabra error cuando ocurra un error al validar

Cada mensaje se almacena dentro del objeto `$errors`

Podemos mostrar los mensajes detallados:
```html
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
```

#### old('name')
Para el caso en que se generan errores y se recarga la pagina
se pierden todos los datos de los campos introducidos por el usuario

Para evitar ello, en el
`<input value="">`
podemos agregar dentro del `value` un auxiliar de laravel llamado
`{{ old('parametro') }}`

Quedando de la siguiente manera:
```html
<input value="{{ old('title') }}">
```

TAREA:
- Hacer las validaciones en el metodo `public function edit()`
