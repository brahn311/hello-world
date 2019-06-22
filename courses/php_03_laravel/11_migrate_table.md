# Trabajando con un Modelo

Mejoraremos el modelo y las migraciones

Primero debemos crear una nueva migracion para modificar la tablas
con los datos que añadiremos añadir

Las migraciones se almacenan y se comparan con la base de datos,
al ejecutar el comando se actualizan las migraciones faltantes

Generaras incongruencias si modificas alguna migracion y trabajas con varios usuarios:
Faltaran cambios, pero indicara que estas actualizado

> **Nota!** la buena practica es no modificar migraciones, es crea nuevas migraciones

Usaremos artisan para crear la migracion

Recuerda que necesitas un nombre para la migracion, en este caso sera
`create_column_title_in_reports`

Usaremos la opcion adicional para indica que modificaremos una tabla especifica:
`--table=expense_reports`

El comando completo seria el siguiente:
`$ php artisan make:migration create_column_title_in_reports --table=expense_reports`

Vamos a la carpeta para trabajar el archivo de migracion creado

En el metodo `up` añadimos:
`$table->text('title');`

En el metodo `down` añadimos:
`$table->dropColumn('title');`

Puedes usar el comando para borrar la tabla vieja y crear todo desde cero
`$php artisan migrate:fresh`
