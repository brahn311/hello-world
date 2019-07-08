# Flujo de trabajo profesional
#### (24) Flujo de trabajo profesional: Haciendo merge de ramas de desarrollo a master
- cada participante trabaja en ramas separadas

Cuando hacemos
`$ git pull` o `$ git push`
le agregamos el
`origin [rama]`
es decir que nos traemos o actualizamos especificamente una rama
y que debemos repetir el proceso constantemente  

> **Nota!** verificar si cuando acemos git clone trae todo
(es decir incluye las ramas)

Los archivos binarios igual se pueden subir, en el caso de las imagenes
_GitHub_ las guarda un cache intetermedio y tardan en refrescarse.

> **Nota!** es mala practica subir archivos binarios  
Es perferible usar otro tipo de formatos de imagen
por ejemplo archvos.svg

#### (25) Flujo de trabajo profesional con Pull requests
En un proyecto el master es la rama principal y donde se encuentra codigo estable

Se usan distintas ramas para incorporar funcionalidades o _features_
y cuando estas funcionalidades se encuentren estables y probadas
se pasan a fusionar en la rama _master_ y esa tarea la realiza alguien especial

La teorica dice que el fusionar las ramas debe tenerla un rol especifico
El rol para _pasar funcionalidades estables a master_ la realiza el **DevOps**
(Administrador de entornos de programacion)

En un proyecto profecional se suele tener varias ramas/repositorios/servidores
- _staging_ para desarrollo y pruebas
- _production_ para la version final y operativa

los cambios subidos al repositorio _staging_ de desarrollo deberan de pasar
hasta el repositorio _master_ de produccion y asi llevar el tag de version

Si alguna persona en particular subir un cambio se debe enviar una peticion,
solo si la peticion es aceptada, automaticamente se realiza la fusion

Este proceso no es propio de _Git_ y en cada servicio posee distintos nombres
- **Pull request** para _GitHub_
- **Merge request** para _GitLab_
- **Push request** para _GitBucket_

#### (26) Utilizando Pull Requests en GitHub

El pull request lo realizas desde la pagina del repositorio tuyo en _GitHub_
en la pagina principal del repositorio, si una rama cambia, eres notificado
y si sers el dueño de el repositorio muestra el boton
para hacer ese nuevo _pull request_ hacia _master_

Tambien podras crear el _pull request_ manualmente cuando desees
Comparara las ramas y avisa si es existe una fusion disponible

Entre sus otras caracteristicas adicionales tenemos:
- Asignar la verificacion, pruebas y aceptacion a un colavorador
- Delegar el pull request a otro miembro
- Asignar tags al pull request

En conclusion el _pull request_ es un `$git merger [rama]`
que requiere para poder ser realizado:
- Estudiar y confirmar
- Aceptar

> **Nota!** Luego de aceptar el pull request se debe hacer el merge

El _pull request_ siempre se puede comentar
Las solicitudes en su evaluacion pueden ser rechazadas
y pueder si cumplen los requisitos, ser reconcideradas nuevamente

Luego del pull request y merge, puedes borrar la rama sin usar

> **Nota!** las ramas no se borran automaticamente
