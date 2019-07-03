# Volver en el tiempo en nuestro repositorio utilizando branches y checkout

#### Borrar commit anteriores
Uno de los metodos para regresar a un punto determinado (commit) en el tiempo es usando `reset`

La opcion `reset` posee 2 distinas opciones:
- `$ git reset [hash-commit] --soft`
Borra del repositorio todos los cambios de los commits realizados posteriormente al _hash-commit_
pero esos cambios borrados los deja reflejados en el _staging area_

- `$ git reset [hash-commit] --hard`  
Borra del repositorio _fisica y logicamente_ todos los cambios posteriores al _hash-commit_

#### visualizando archivos de commits anteriores
Para mostrar cambios anteriores usamos el comando _checkout_

`$ git checkout` tiene multiples funciones y usos, pero para este caso usaremos:

- `$ git checkout [hash-commit] [archivo.extension]`  
Este comando cambiara el contenido del archivo, retrocediendo su estado segun sea el commit
Nosotros al pedir `$ git status` indicará el archivo tiene cambios en _staging_

> **Nota!** si en ese punto hacemos _commit_ perderemos todos los cambios nuevos,
pues con el comando _checkout_ quitamos todo lo nuevo  
pero el resto de los archivos del repositorio no seran afectados

- `$ git checkout master [archivo.extension]`  
Te regresara nuevamente al ultimo commit, el mas reciente
