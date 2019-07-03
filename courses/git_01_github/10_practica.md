# Crea un repositorio de Git y haz tu primer commit

#### Practicando
- Crea una carpeta vacia y muevete a ella
- `$ git init` (iniciar el repositorio)
- Agrega o crea archivos cualquieras
- `$git add [archivo.extension]` (agrega el archivo al staging area)
- `$git status` (comprueba el estatus del repositorio)
- `$git rm [archivo.extension]` (borra el archivo, pero _en este ejemplo no lo hace_)

> **Nota!** segun borraste el archivo, pero no... ya estaba en el staging area  
Es decir, esta siendo controlado por git y contituara en el staging area

- `$git rm --cached [archivo.extension]` (borrara el archivo del staging area)
- `$git commit` (guarda los cambios en el repositorio _aunque falta colocar el mensaje_)
- `$git commit -m` (subir cambios del staging area al repositorio)

> **Nota!** el `$ git commit -m` lo debes hacer ya estando configurado tu usuario  
Si no tienes tu usuario registrado, dara error

#### Verificando la configuracion de git
- `$git config` (lista de comandos y opciones de git)
- `$git config --list` (lista de configuraciones de git por defecto)
- `$git config --list --show-origin` (listado de configuraciones y su ubicacion fisica)

#### Configuracion obligatoria de git
- `$git  config --global user.name "nombre del usuario"` (configurar tu nombre)
- `$git  config --global user.email correo_del_usuario` (configurar tu correo)

> **Nota!** cuando usas las opciones, estas se identifican con guiones:  
`-` Un guion indica que usaras comandos abreviados (de una sola letra)  
`--` Dos guiones indica que el comando sera una palabra completa

#### Ver historial
- `$git log` (listado detallado de los commit, desde el mas reciente hacia atras)
- `$git log --oneline` (listado resumido de los commits)

> **Nota!** el `$ git log` te muestra tu posicion actual, llamada _HEAD_  
Cuando usas `$ git checkout` puedes "viajar en el tiempo" cambiando tu _HEAD_
