# Manejo de usuarios y grupos
Linux es un sistema multiusuario, cada usuario puede correr con diferentes configuraciones, permisos, etc

Y cada proceso o servicio, puede correr en distintos usuarios, grupos con distintas configuraciones de seguridad

##### Practica
Crear un usuario y añadirle y quitarle restricciones

#### `adduser`
`adduser [user_name]` Comando interactivo
- Realiza preguntas adicionales opcionales
  - Contraseña
  - Datos del usuario: nombre, ubicacion, telefonos, otros.
- Crea un grupo automaticamente para dicho usuario
- Settea el home
- Utiliza un script llamado useradd

#### `useradd`
Programa que crea propiamente al usuario  
Y todo se configura uno por uno

#### Datos de usuarios
Los datos se almacenan en `/etc/passwd` y aparecen todos los usuarios del sistemas

```
root:x:0:0:root:/root:/bin/bash
daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
bin:x:2:2:bin:/bin:/usr/sbin/nologin

```
- `root` = nombre
- `0:0` = id_usuario:id_grupo
- `root:/root:/bin/bash` = ?:carpeta_home:bash_terminal_o_ssh
  - Para el `bash` suele usarse `/bin/false` para no permitir loguearse

Todo usuario tiene un id, home y el terminal a usar.

#### Cambiar de usuario
- `su - [nombre de usuario]`  
_forma correcta / carga un nuevo ambiente para variables de entorno y no usa las anteriores_

- Al crear un archivo, el usuario queda registrado como _autor_ y mantiene el grupo del autor

#### Grupos
Cada usuario puede pertenecer a diferentes grupos que le permita acceder a recursos

- Ver todos los grupos `/etc/group`
- Conocer quien eres (cual usuario es) `# whoami`
- Consultar grupos del usuario `# groups` te dice a que grupos tienes acceso
- Añadir a un nuevo grupo `# addgroup [Usuario] [grupo]`
  - `addgroup platzi sudo` Luego se necesita volverse a conectar al usuario para que cargue los permisos
   - `logout` ... `sudo su - [usuario]`
- `deluser [usuario]`
- `delgroup [group]`

Para acceder a algun recurso o ejecutar un programa,
debe solicitarlo el propietario/autor o alguien del mismo grupos  

##### Ejemplo
- `# ls -l /dev/`
- Solo los miembros del grupo _dialout_ pueden acceder a una terminal serial _ttyS0_
- Solo los miembros del grupo _cdrom_ pueden acceder a leer un CD/DVD _sr0_
- Ver listado de unidades y permisos `# ls -l /dev/disk/by-uuid`

#### Contraseñas
En el archivo `/etc/shadow` se guardan las contraseñas encriptadas
- `!` significa que el usuario no tiene ninguna contraseñas
- Puedes entrar editar y borrar la contraseña almacenada
