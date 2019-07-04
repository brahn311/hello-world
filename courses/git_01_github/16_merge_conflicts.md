# Solución de conflictos al hacer un merge
En este caso forzaremos la situacion para conocer como solucionarlo conflictos

Anteriormente, estando en la rama _master_ usamos el comando
`$ git merge cabecera`
y ahora los commit de cabecera se copiaran en master

Realizaremos el mismo paso en direccion contraria

Desde la rama cabecera uso el comando:
- `$ git checkout master`
para cambiar de rama _master_

> **Nota!** al usar el comando _checkout_ debemos tener en nuestra _staging area_ limpia
En caso contrario, perderemos las modificaciones realizadas

- `$ git merge master`
y ahora tendremos las ramas _master_ y _cabecera_ exactamente iguales

Teniendo en dos ramas distintas los mismos archivos, tomamos el mismo archivo
en ambas ramas y cambiamos las mismas lineas de distinta manera

usamos el comando
`$ git -am "comentario"`
en cada rama y guardamos en el repositorio

> **Nota!** la opcion `-am` une los comandos `git add .` y `git commit -m`

Ahora nuevamente en la rama _marter_ unimos los archivos con
`$ git merce cabecera`

_Justo alli se genera el conflicto_

Se creara un commit con los cambios que fueron realizados satifactoriamente
pero el conflicto queda sin resolver todavia

El conflicto lo identificas en las lineas:
```
<<<<<<< HEAD
Aqui estara el codigo que tenias originalmente en el archivo
=======
Aqui estara la 2da version que estas fusionando de la otra rama
>>>>>>> cabecera
```
Para resolver el conflicto, debemos editarlo manualmente
y crear agregar el cambio y obligatoriamente hacer el nuevo commit

> **Nota!** dependiendo del editor de texto, te identificaran los errores y te facilitan la edicion
