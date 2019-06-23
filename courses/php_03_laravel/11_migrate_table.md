# Trabajando con un Modelo

Mejoraremos el modelo y las migraciones

Primero debemos crear una nueva migracion para modificar la tablas
con los datos que queremos añadir

Las migraciones se almacenan y se comparan con la base de datos,
y al ejecutar el comando se actualizan las migraciones faltantes

No debes modificar directamente un archivo de migracion,
podras generar incongruencias si modificas alguna migracion si trabajas con varios colaboradores

A algunos participantes les podria faltar cambios, pero indicara que estan actualizado

> **Nota!** Es buena practica "_No modificar_ las migraciones, _crea_ nuevas migraciones"_

#### Actualizando la tabla
Usaremos artisan para crear la migracion

Recuerda que necesitas un nombre para la migracion, en este caso sera
`create_column_title_in_reports`

Usaremos la opcion adicional para indica que modificaremos una tabla especifica:
`--table=expense_reports`

El comando completo seria el siguiente:
`$ php artisan make:migration create_column_title_in_reports --table=expense_reports`

Vamos a la carpeta para trabajar el archivo de migracion creado

En el metodo `public function up()` añadimos:
`$table->text('title');`

En el metodo `public function down()` añadimos:
`$table->dropColumn('title');`

Puedes usar el comando para borrar la tabla vieja y crear todo desde cero
`$php artisan migrate:fresh`

Puedes ver la [documentacion de migraciones](https://laravel.com/docs/5.8/migrations) para conocer mas comandos
