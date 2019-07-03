# Analizar cambios en los archivos de tu proyecto con Git

#### Commits
Aunque puedes hacer `$ git commit` (sin mensaje) git te fuerza a registrar un mensaje
- Git te lanzara el editor de texto registrado por defecto al instalar
Por defecto el editor es `vim` pero puedes cambiarlo en la configuracion)

##### Como usar vim:
- `esc + i` empezar a escribir
- `esc + shift + zz` fuerza los cambios

#### git show
Muestra los cambios:
- De todo el commit en general:
`$ git show`
muestra las diferencias del commit anterior en todos los archivo

- De un archivo especifico sus ulimos cambios
`$ git show [archivo.extension]`
muestra info del ultimo commit y
las diferencas del archivo especifico comparando con commit anterior)

#### git diff
Muestra solo las diferencias entre commit actual y el anterior de todos los archivos

- `$ git diff`
todos los cambios del ultimo commit y el commit anteior

- `$ git diff hash-commit-A hash-commit-B`
compara las diferencias _entre commit especificos_ de todos los archivos en esos commits

- `$ git diff hash-commit-A hash-commit-B [archivo.extension]`
Muestra las diferencias de un archivo en particular comparando commits especificos
   - commit-A representa el commit mas viejo
   - commit-B representa el commit mas nuevo

> **Nota!** el orden donde ubicamos los commit tiene importancia
Siempre mostrara lo que ya no esta en el commit-A y lo nuevo del commit-B
