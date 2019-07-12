# Conexión a GitHub con SSH
Ya con las llaves SSH generadas y la pc configurada,
ahora pasaremos a conectarnos con el repositorio de _GitHub_

> **Nota!** Crea una llave primaria por cada usuario en cada computador

### Añadir la llave SSH a _GitHub_
1. Abrir tu perfil
1. Entrar en Settings de tu perfil (no del repositorio)
1. Accede a SSH and GPG keys
1. Llena el campos 
   - `title` con el nombre del equipo
   - `key` con la _llave pública_
1. Añadir la key
1. Agrega la clave de confirmacion

Perfecto.. ya conectaste _GitHub_ con tu _llave publica_

### Cambiar el remote de tu repositorio
Actualmente el repositorio esta asociado al protocolo https

Debemos cambiarlo para que use el protocolo SSH
1. En tu repositorio, en el boton _clone or download_ copia la url SSH
1. Desde la raiz de tu repositorio local
1. Usa el comando `$ git remote -v` para comprovar la url a donde apuntan
   > **Nota!** El _origin_ es una palabra estandar en el medio pero se puede usar cualquier otro nombre
1. Usa el comando 
`$ git remote set-url origin git@github.com:[user/repository_name].git`
   > **Nota!** Podemos tener multipes _remote_ y apunten a distintos repositorios 
1. Comprueba que el cambio ya este realizado con `$ git remote -v`

Con estos pasos ya solo debes hacer el commit y no te pedira claves

Cuando desees negar el acceso a un repositorio
solo borra la llave publica de ese usuario que se almacena dentro de los settings
de _GitHub_ y listo
