# Administrar discos y particiones en Linux

Administrar discos y particiones en Linux
Todos los discos duros se pueden organizar su espacio, visualiza una hoja cuadriculada, que se divide en distintas areas (físicos especificos)

Las particiones nos permiten segmentar un disco, asignando cada espacio para una labor en particular

#### Crear disco duro en _Amazon_
Puedes crear un nuevo volumen y asignarlo al servidor que creamos en `Volumes`

> **Nota!** Recuerda seleccionar la misma zona al crear el volumen para que pueda ser montado ese volumen

- Accedes al servidor por `Running instances`
- Crea el nuevo volumen `Create Volume`
  - SSD GP2 General purpose
  - 100 GiB (para hacer pruebas)
  - Selecciona la zona
- Accedemos a las opciones (click derecho) le damos la opción _Attach Volume_
  - instanciamos al servidor y podemos dejar la configuración por defecto (device)

##### Verificar el montaje del disco
- Ingresa como super usuario con el comando `$ sudo su` en tu servidor
- Usa el comando `# dmesg` para verificar que se montó el disco duro que creado

##### Listar discos y particiones
Usamos el comando `fdisk -l` para listar todos los discos y ver cómo estan distribuidas las particiones
`fdisk [dispositivo]` es usado para ingresar a un disco en especifico y operar sobre el mismo


Tendras disponibles distintos comandos o opciones dependiendo de las actividades a realizar
Usando `fdisk`
- la opcion _p_ muestra la informacion de configuracion del dispositivo

> **Nota!** No usar con particion, los discos no tienen un número, las particiones si  
Investiga y usa con confianza las ayudas de `fdisk` que son muy buenas

##### Tipos de particiones
Existen dos tipos de tablas de particiones:
- Tradicional que permite 4 particiones primarias y una lógicas
  - Las particiones extended sirven como contenedores para más particiones logicas
- _gpt_ que permite tener muchas más particiones

##### Crear partición
- Ejecutamos `fdisk /dev/xvd` para ingresar al disco
- Creamos una nueva partición con el comando _n_
- Preguntara que tipo de particion creara _primaria o extendida_
- Sí es la primera partición debemos crear una primaria, usamos el comando _p_
- Pedira los sectores, seleccionamos el tamaño de la partición con _+20G_

##### Cambiar tipo de partición
- Entramos a _fdisk_ especificando el disco duro
- Seleccionamos el número de la partición
- Seleccionamos _t_
- Elegimos el número del tipo de partición

##### Eliminar partición
- Entramos a _fdisk_ especificando el disco duro
- Usamos el comando _d_
- Seleccionamos la partición
- Guardamos cambios con _w_

##### Guardar los cambios
- Con _w_ guardamos los cambios que realizamos
- Con _q_ salimos y no se guardan los cambios

> **Nota!** Si salimos sin guardar la configuración que hacemos no se va a escribir en el disco

Para practicar:
1. Primaria, 1, 2048, +20G (windows)
1. Extendida, 2, "", 40G
1. Logica, 5, "", 40G (linux)
1. Primaria, 3, "", 40G (linux)
1. Borramos la particion 5
1. Logica, 5, "" 30G (linux)
1. Logica, 6, "", "" = 10G (linux)

> **Nota!** la particion 5 esta dentro de la particion 2, la extendida
