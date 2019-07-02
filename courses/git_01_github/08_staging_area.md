# ¿Que es el staging, repositorios y cual es el ciclo basico de trabajo en Github?

#### Iniciar el control de cambios
Para iniciar un repositorio (activar el sistema de control de versiones) en tu proyecto,
solo debes ejecutar el comando
`$ git init`
este, crea un espacio intermedio y desconectado en memoria RAM llamado _staging_

- Se crea el repositorio y aparece una carpeta .git
- En el _staging area_ donde se almacenaran todos los archivos que quieras

#### Pasar archivo a staging
Como git controla los cambios, este rastrea los cambios en los archivos
Con el comando
`$ git add [archivo]`
podemos incluir a los archivos a git para que estos sean rastreados
A partir de este momento los archivos seran controlados por git
y puede que algunos archivos esten sin cambios y otros no

- `$ git add .` agrega todos los archivos a partir de tu ruta pwd

A partir de aqui, cuando un archivo ya tenga todos los cambios realizados
procedes a añadir esos cambios al repositorio

#### Pasar al repositorios
Ya teniendo varios archivos con cambios, y los cambios estan terminados
procedes a incluir los archivos al repositorio

Git realizara una captura de los cambios en cada linea de codigo

Para que git realice la captura _instantanea_ usamos el comando `$ git commit -m "[mensajes varios]"`
que toma la captura de todos los cambios y le asigna un identificador
_hash_ con un mensaje identificador del commit

Ciclo de vida o estados de los archivos en Git:
Archivos Tracked
Archivos Staged
Archivos Unstaged
Archivos Untracked

Cuando trabajamos con Git, nuestros archivos pueden vivir y moverse entre 4 diferentes estados

- Archivos Tracked:
Son los archivos que viven dentro de Git, no tienen cambios pendientes
y sus últimas actualizaciones han sido guardadas en el repositorio gracias a los comandos
 _git add_ y _git commit_

- Archivos Staged:
Son archivos en Staging y viven dentro de Git y hay registro de ellos
porque han sido afectados por el comando _git add_, aunque no sus últimos cambios
Git ya sabe de la existencia de estos últimos cambios
pero todavía no han sido guardados definitivamente en el repositorio
porque falta ejecutar el comando _git commit_

- Archivos Unstaged:
Entiendelos como archivos “Tracked pero Unstaged”; estos son archivos que viven dentro de Git
pero no han sido afectados por el comando git add ni mucho menos por git commit
Git tiene un registro de estos archivos pero está desactualizado,
sus últimas versiones solo están guardadas en el disco duro

- Archivos Untracked:
Son archivos que NO viven dentro de Git (solo en el disco duro)
y nunca han sido afectados por _git add_, así que Git no tiene registros de su existencia

Recuerda que hay un caso muy raro
donde los archivos tienen dos estados al mismo tiempo: _Staged y Untracked_
Esto pasa guardas los cambios de un archivo en el área de Staging (con el comando git add) pero
antes de hacer commit para guardar los cambios en el repositorio,
haces nuevos cambios que todavía no han sido guardados en el área de Staging

Otros comandos para mover archivos entre los estados de Git:
- `git status` nos permite ver el estado de todos nuestros archivos y carpetas
- `git add nombre-del-archivo-o-carpeta` para añadir archivos y carpetas individuales
- `git add -A` pasa a _Staged_ todos los archivos (tanto Untrackeds como unstageds)
- `git reset HEAD` ayuda a quitar del _Staged_ archivos y devolverlos a su estado anterior
- `git commit -m` ayuda a mover archivos al _Tracked_ añadiendolos al repositorio y pide dejar comentario
- `git rm --cached` mueve los archivos que le indiquemos al estado Untracked
- `git rm --force` elimina los archivos del repositorio y del disco duro (pero podríamos recuperarlos)
