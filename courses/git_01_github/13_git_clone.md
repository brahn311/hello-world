# Flujo de trabajo básico con un repositorio remoto
Podemos tener un servicio en la nube para tener y compartir nuestros repositorios

- Github
- Gitlab
- Gitbucket

#### Clonar repositorios
Cuando tenemos un repositorio en linea
clonamos ese repositorio a nuestra maquina local

- `$ git clone [https://URL_del_repositorio].git`  
Creara una copia del repositorio en linea

#### Subir al repositorio
- `$ git push origin [rama]`
Si realizamos cambios en algun archivo del repositorio clonado
y los deseamos sincronizar los con el github, debemos usar el comando

#### Actualizar el repositorio
Si deseamos sincronizar y traernos los ultimos cambios del repositorio en linea
1. `$ git fetch` Actualiza la base de datos de cambios
1. `$ git merge origin-[rama]` Actualiza los cambios a una rama especifica

Este comando fusiona el _fetch_ y _merge_ en uno solo
- `$ git pull`  
