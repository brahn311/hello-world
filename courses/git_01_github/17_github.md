# Uso de GitHub
Plataforma que permite guardar repositorios de Git
que podemos usar como servidores remotos y
realizar actividades de forma visual e interactiva (sin la consola de comandos)

Puedes en [GitHub](https://github.com) crear tu cuenta gratuita

Luego de ingresar, entre otras cosas podras:
- Crear o importar repositorios
- Crear organizaciones y proyectos de trabajo
- Descubrir repositorios de otras personas
- Contribuir a esos proyectos, dar estrellas

Al crear el repositorio le asignas un nombre, el cual sera la ruta de acceso para entrar a el

Una vez creado, encontraras un archivo llamado `README.md`
y siempre lo veremos por defecto al entrar a un repositorio.   
Es una buena practica configurarlo para describir el proyecto,
los requerimientos y las instrucciones que debemos seguir para contribuir correctamente

#### Clone
Podemos clonar un repositorio desde GitHub (o cualquier otro servidor remoto)
esto descargara la versión del proyecto que se encuentra en _GitHub_ en nuestro entorno local

Debemos copiar la _URL_ (por ahora usando solo HTTPS) y ejecutar el comando
`$ git clone [URL]`
esto solo funciona para tener localmente los repositorios que ya creados
y contribuir en ellos

#### Remote
Si queremos conectar nuestro repositorio local (que creamos con git init)
debemos ejecutar las siguientes instrucciones:
1. Guardar la _URL_ del repositorio de _GitHub_ (con el nombre: origin)
`$ git remote add [name] [URL]`
1. Verificar que la _URL_ se haya guardado correctamente
   - `$ git remote`
   - `$ git remote -v`
1. Traer la versión del repositorio remoto, hacer merge para crear un commit con los archivos
de ambas partes
   - Podemos usar `$ git fetch` y `$ git merge`
   - O solo hacer `$ git pull origin master --allow-unrelated-histories`
1. Por último, ahora sí podemos hacer
`git push origin master`
para guardar los cambios en el repositorio remoto
