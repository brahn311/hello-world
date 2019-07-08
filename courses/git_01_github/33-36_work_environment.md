# Multiples entornos de trabajo
#### (33) Git Rebase: Reorganizando el trabajo realizado
Reorganiza los commit de distintas ramas y lo reordena haciendo en una sola

Desde la rama otra rama (la que no es master) usa el comando
`$ git rebase master`
trayendote los commit de la rama _master_ a tu otra rama

Te pasas a la rama _master_ y usas el comando
`$ git rebase [la_otra_rama]`
moviera a la rama _master_ los commits de otra rama

> **Nota!** usar rebase es una mala practica en repositorios de produccion
debido a que puede generar conflictos

#### (34) Git Stash: Guardar cambios en memoria y recuperarlos después

- `$ git stash list` lista de archivos almacenados
- `$ git stash pop` aplicar cambios y borrar datos de ese stash
- `$ git stash drop` borra todo lo almacenado en stash
- `$ git stash branch [nueva_rama]` mover archivos a nueva rama

#### (35) Git Clean: Limpiar tu proyecto de archivos no deseados
Limpia el repositorio de archivos indeseados o duplicados
que no forman parte del proyecto

- `$ git clean --dry-run` corrida en seco para ver cuales archivos borraria
- `$ git clean -f` borra todo lo listado con --dry-run

> **Nota!** borra archivos pero no carpetas o lo que coincida con .gitignore

#### (36) Git cherry-pick: Traer commits viejos al head de un branch
Usar cuando tienes commits en otra rama y necesitas usar espeficicamente ese

> **Nota!** no confundir con _merge_, ambos comandos trabajan distino

- `$ git cherry-pick id_commit` toma el commit de otra rama lo trae a tu staging

> **Nota!** usar este comando es considerado mala practica
Tambien, al hacer _merge_ con la misma rama posiblemente se generen conflictos
