# Generar backup de Base de datos
Existen muchas formas de generar un backup, en este video veremos algunas de las formas:

#### AMAZON
Herramienta en amazon para generar una imagen de la instancia en la que estás trabajando

Pasos:
1. `# sync` Sincroniza todos del cache al disco duro
1. Crea una imagen de la instancia:
   - Instance + Right_click > Image > Create Image
   - No reboot (reiniciar el equipo para respaldar)
   - Instance Volumes: Selecciona solo el que quieras respaldar
   - Llena los campos: Image name, Image description
   - Create Image > Create
1. Checkea en el menu: IMAGES > AMIs
   - Alli se genera la imagen y empieza a crear un snapshot
1. En ELASTIC BLOCK STORE > Snapshot

#### Generar un backup de la base de datos PostgreSQL
   - `# su - postgres` Iniciar sesion
   - `$ whoami` confirmando cual es el usuario
   - `$ ls` confirmando la version
   - `$ psql` iniciando PostgreSQL
      - `\l` lista de bases de datos
      - `\l+` lista de bases de datos mas detallada
	  - `\q` salir
   - `$ pg_dump --help`
   - `$ pg_dump [database_name]` salida de datos por pantalla
   - `$ pg_dump [database_name] > [backup.dbname.date.sql]` respaldar en archivo

> **Nota!** Es una buena práctica nombrar el archivo con
el nombre de la base de datos y la fecha del respaldo

> **Nota!** _PostgreSQL_ no guarda los indices dentro de la DB,
solo sintaxis _sql_

#### Ver en directo el proceso
   - `$ ssh [servidor]` Conectarte de regreso al servidor
   - `$ su - postgres` Iniciar sesion
   - `# tail -f [backup.dbname.date.sql]` mostrara siempre las ultimas lineas del archivo

#### Borrar y restaurar la base de datos
- `$ dropdb [database_name]`
- `$ psql` Comprobamos que fue borrada
   - `\l`
   - `\q`
- `$ createdb [database_name] -0 [owner]`
- `$ pg_dump [database_name] > tmp` Respaldar en archivo DB vacia
- `$ less tmp` Inspeccionar datos del respaldo
- `$ psql [database_name] < [backup.dbname.date.sql]` Restauramos la DB

`# apt-cache search backups` Buscar programas para backups
