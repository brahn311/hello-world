[Inicio](../../) > [PHP con Laravel](./)

# Configuración de Laravel

Revisaremos la configuracion de laravel
Las variables del entorno las almacenamos en el archivo `/.env`

- `APP_NAME` es el nombre de la aplicacion
- `APP_ENV` es el entorno que estamos trabajando
   - `local` es desarrollo
   - `production` es produccion
- `APP_DEBUG` especifica si la app muestra o no los errores (debug)

Laravel usa eloquent de forma automatica

- `DB_CONNECTION` es el tipo de base de datos
   - `mysql`
   - `psql`
- `DB_HOST` IP del servidor (Homestead.yaml)
- `DB_PORT` es el puerto de conexion
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

Dependiendo de tu proyecto y lo que uses para programar,
configura estas variables para configurar tu app

Se modificaron:
- `DB_HOST` (usaron el de la maquina virtual de homestead)
- `DB_DATABASE` (especificaron el nombre del la DB que usaremos para el proyecto)

Ahora creamos la base de datos que usaremos en el proyecto usando PHPMyAdmin
o cualquier otro gestor de Base de datos

> **Nota!** Si agregas el nombre de la DB en el archivo `Homestead.yaml` no es necesario que crees la DB
