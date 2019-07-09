[Inicio](../../) > [PHP con Laravel](./)

# Migraciones en Artisan

Por el momento solo cuentas con las tablas al momento de hacer la primera migracion
- Crea la tabla de usuarios
- Crea la tabla de migraciones

Crearemos la tabla de los reportes de gastos

Utilizaremos el comando de artisan:
`artisan make:migration`

> **Nota!** desde homestead (usando ssh)
puedes usar solo `artisan` en vez de escribir `php artisan`

Para ver las ayudas del comando:
`artisan make:migration --help`

Para crear una migracion:
`artisan make:migration description_migration_name`

Usaremos la opcion de crear la migracion
`--create=[table_name]`
para crear una tabla nueva

El comando completo sera:
`artisan make:migration create_table_expense_report --create=expense_reports`

La estructura general de los comandos es:
`artisan <comando:comando> [description_name] <--opcion>[=table_name]`

Creara el archivo de la migracion y estara lleno con lo basico para crear una tabla

Dentro del metodo
`up`
tendras dentro las llamadas a metodos para:
```
$table->bigIncrements('id');
$table->timestamps();
```
- `bigIncrement('id')` el primary key autoincrementado
- `timestamps()` añade el `create_at`, `update_at` de Elloquent

Dentro del metodo
`down`
tendras el metodo para elimiar la tabla

Este metodo aplica cuando usas el comando:
`php artisan migrate:rollback`
y con ello eliminaria los pasos (los pasos las ves en la tabla de migraciones como bash)

Para aplicar las migraciones y actualizar tu base de datos usas el comando:
`php artisan migrate`
