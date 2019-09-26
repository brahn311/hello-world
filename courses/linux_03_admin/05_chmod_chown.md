# Interacción con archivos y permisos
En linux todo se considera como archivos (incluso directorios)

Con el comando `$ ls -l` podemos observar la lista de archivos de nuestro directorio actual
con información un poco más detallada

`-rwxrw-r--` (el primer campo) indica los diferentes permisos para cada archivo o directorio

- El primer carácter:
Indica el tipo del archivo, si tenemos:
  - `-` un archivo
  - `l` enlace simbólico
  - `d` directorio

- Los siguientes caracteres (permisos) se dividen en grupos de 3 caracteres `rwx`:
  - lectura (r),
  - escritura (w)
  - ejecución (x)

- Grupos:  
Los grupos nos ayudan a darle los mismos permisos a diferentes usuarios
sin necesidad de asignarlos a cada uno individualmente.
Todos los usuarios que pertenezcan al grupo tendrán los mismos permisos.
  - El primer grupo de 3 son los permisos del usuario que creó ese archivo
  - El segundo para el grupo al que pertenece este usuario
  - El tercero para cualquier otro usuario de tu sistema operativo

Si en vez de estas letras encuentras un `-` (guion) significa que ese usuario o grupo de usuarios
no tiene permiso para esa acción en particular

#### Por ejemplo:
`-rwxrw-r--` Indica que trabajamos con:
  - Un archivo
  - Todos los usuarios del sistema tienen permisos de lectura
  - El usuario creador y su grupo tienen permiso de escritura
  - Solo el usuario creador puede ejecutar el archivo

#### `chmod`
Para cambiar los permisos de un archivo o directorio podemos usar el comando `chmod`

- Modificar usando letras:  
`$ chmod [tipo_de_usuario][operacion][permiso]`  
  - [quién] de finimos a quién lequeremos añadir o quitar los permisos  
    - El usuario propietario: `u`
    - El grupo `g`
    - El resto de usuarios `o`
    - Para todos `a`
  - [operacion] a aplicar al usuario
    - Anadir permiso `+`
    - Quitar permiso `-`
  - [permiso] `r` `w` `x`
- Metodo octal (usando numeros):    
También podemos encontrar estos permisos como 3 números del 1 al 7  
Estos números son la suma de los 3 caracteres de permisos para cada usuario o grupo
- `r` = 4
- `w` = 2
- `x` = 1
- `-` = 0

Por lo tanto, los permisos de nuestro archivo de ejemplo serían:
- 7 (4+2+1) = `rwx`
- 6 (4+2+0) = `rw-`
- 4 (4+0+0) = `r--`


- 1 = execute
- 2 = write
- 3 = write and execute
- 4 = read
- 5 = read and execute
- 6 = read and write
- 7 = read, write and execute

##### Por ejemplo:
- `$ chmod u+x [nombre-del-archivo]` añadir permisos de ejecución a nuestro usuario propietario
- `$ chmod +x [nombre-del-archivo]` añadir permisos de ejecución a todos los usuarios 
- `$ chmod 755 [nombre-del-archivo]` Añades permisos a todos los grupos colocando niveles especificos

> **Nota!** es mala practica añadir permisos `777` (los permisos son muy permisivos o abiertos)

#### `chown`
Podemos cambiar al usuario propietario del archivo con el comando `chown`
- `$ sudo chown [usuario]:[grupo] [nombre-del-archivo]`
- `$ sudo chown [usuario]: [nombre-del-archivo]` _entiende que el grupo es igual al usuario_
