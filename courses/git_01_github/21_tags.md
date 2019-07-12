# Tags y versiones en Git y GitHub
Los _tags_ o etiquetas nos permiten marcar en commits

Generalmente los _tags_ son usados para identificar las versiones
o cambios más importantes o significativos de nuestro proyecto

#### Commits
Antes de crear el _tag_ debes copiar el id commit o el id corto (7 caracteres)

##### Listar todos los commits:
- `$ git log` muestra los ultimos commits del branch
- `$ git log --all` muestra todos commit en la historia de repositorio
- `$ git log --all --graph` muestra mas graficamente la historioa
- `$ git log --all --graph --decodate --oneline` muestra todo comprimido

#### Aliases
A los comandos muy largos puedes crearle un nombre corto y usarlos en el terminal
- `$ alias [nombre_sustituto]="[instruccion para ejecutar]"`
- `$ alias graph="git log --all --graph --decodate --oneline"`

Al final ya podras usar solo el alias `$ graph`

### Comandos para _tags_
##### Crear tags
  - `git tag -a [tag_name] -m "[comentario]" [id_commit]`

##### Listar los tags
- `git tag` muestra los _tags_
- `git show-refs --tags` muestra la referencia del commit y su _tag_ asociado

> **Nota!** como los tags _no son cambios_
no son subidos al repositorio con el tradicional ´$ git push origin master´  

#### Publicar un tag en el repositorio remoto
Como los _tags_ son utiles para _GitHub_ debes usar un comando distinto para subirlos
- `git push origin --tags`

#### Borrar un tag del repositorio
- `git tag -d nombre-del-tag`  
> **Nota!** Los _tags_ tampoco se borran automaticamente de repositorio remoto  
A pesar de ser borrados en el local se mantienen en el remoto como una referencia

##### Borrar del repositorio remoto
- `git push origin :refs/tags/[tag_name]`

---
> **Nota!** `$ history` muestra los ultimos comandos usandos en la terminal
