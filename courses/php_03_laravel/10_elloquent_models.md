[Inicio](../../) > [PHP con Laravel](./)

# Modelos con Eloquent

Entre las opciones de artisan nos encontramos con el comando
`make:model`

Sirve para crear una nueva classe de eloquent
`$ php artisan make:model ExpenseReport`

Recomendaciones:
- Hacer el codigo del proyecto en ingles
- Cuando creamos las tablas en la base de datos usamos plurar
- Cuando creamos modelos en la app usamos singular

Como los terminos _models_ o _entity_ son asociados a muchos significados
no hay una carpeta model

Laravel ubica los modelos dentro de la carpeta de `/app`

Puedieramos crear una carpeta models y modificar los `namespaces`

> **Nota!** No olvides que deberias crear la migration de la tabla primero

#### Tinker
`$ php artisan tinker` es usado para realizar pruebas
utilizando el modelo y la base de datos
- Permite usar nuestros modelos
- Incluye eloquent
- No es necesario usar interfaz gui, solo por consola

El prompt de tinker lo identificamos con `>>>`

Por ejemplo:
Para consultar cuantos registros tenemos usamos
`>>> App\expenseReport::all();`
Nos dara cero resultados

Crear un espacio de memoria para un objeto
`>>> $report = new App\expenseReport();`

Guardar la instancia en la base de datos
`>>> $report->save();`

Si volvemos a consultar los resultados
`>>> App\expenseReport::all();`
Nos mostrara 1 resultado

Para salir de tinker usa
`>>> exit`
