# Comandos en Git para casos de emergencia
#### Reconstruír commits en Git con amend (37)
Permite añadir archivos de tu _staging_ al commit anterior
- `$git commit --amend`

#### Git Reset y Reflog: Úsese en caso de emergencia (38)
Listar cabeceras del repositorio y regresar a una cabecera anterior

1. `$ git reflog` muestra un listado enumerado de historia del repositorio
1. Copia de alli la el id de la cabecera `HEAD@{4}`
1. `$ git resert --hard [id_de_la_cabecera_buena]` regresa todo a esa cabecera

> **Nota!** el caso, puedes usar el _reset soft_ cuando sea conveniente

#### Buscar en archivos y commits de Git con Grep y log (39)
Comando para busca una palabra

- `$ git grep [palabra]` lista los resultados: archivo y contenido de la linea
- `$ git grep -n [palabra] ademas muestra el numero de la linea
- `$ git grep -c [palabra] muestra cantidad de resultados por archivo
- `$ git log -s [palabra] busca dentro de los textos de commits

> **Nota!** [comentario](https://platzi.com/comentario/604374/)
Por alguna razón el `git log -S [palabra]` no me funciona correctamente
Como reemplazo uso: `git log --all --grep=[palabra]`

#### Comandos y recursos colaborativos en Git y Github (40)

- `$ git shortlog` muestra log _por persona_ de las acciones de los miembros
- `$ git shortlog -sn` personsas colavoradoras y sus total de commits realizados
- `$ git shortlog -sn --all` total de commits realizados (incluye borrados)
- `$ git shortlog -sn --all --no-merges` total de commits realizados (sin merges)

#### Configurar comandos propios
- `$ git config --global `alias.[nombre_personalizado] "[comando_personalizado]"`

> **Nota!** no incluir el `git`  
Estos alias solo funcionan dentro de _Git_ unicamente

#### De quien fue la culpa?
Muestra de quien fue la culpa (identifica quien hizo que)

- `$ git blame [archivo]` muestra un listado con la informacion de:
   - id_commits
   - usuarios
   - fechas
   - contenido de la linea
- `$ git blame -c [archivo]` muestra un listado con la informacion identada
- `$ git blame [archivo] -L[linea_inicio],[linea_fin]`
muestra solo lineas seleccionadas

#### Ayudas referenciales de un comando
- `$ git [comando] -help` Abre un documento html con la informacion del comando

#### Ramas remotas
- `$ git branch` muestra el listado de las ramas del repositorio local
- `$ git branch -r` muestra las ramas que son del repositorio remoto
- `$ git branch -a` muestra todas las ramas (locales y remotas)

> **Nota!** Las ramas tienen distintos colores:   
>  - Blanco: ramas locales  
>  - Verde: posicion de la rama actual  
>  - Rojo: ramas remotas

#### Estadisticas
_Github_ ofrece _Insights_ grupo de tablas y estadisticas del repositorio

#### DevOps (41)
- Travis CI: es un servicio que permite integrar git en servidores en la nube (deploy)

Siguiente paso: _GitLab_
