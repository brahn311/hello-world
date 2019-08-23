# Administrar particiones GPT
El arranque del sistema es fundamental para conectarnos al servidor

Sí el arranque del sistema no funciona correctamente, no vamos a poder tener acceso al servidor, por esto es importante tenerlo configurado correctamente

Historicamente hemos podido iniciar el sistema por medio de metodos
- MBR
- UEFI

#### MBR
_Master boot record_  
Registro principal de arranque o registro de arranque maestro (antiguo)

Sector de 512 bytes al principio del disco duro que contiene definidas las particiones y
una secuencia de comandos necesarios para cargar un sistema operativo

Cada disco duro tiene un MBR pero no todas las BIOS pueden arrancar el OS
desde cualquiera de los discos duros

El MBR incluye generalmente la tabla de particiones
y un código inicial para arrancar el Sistema operativo

Cuando se arranca desde el disco duro
la BIOS copia el contenido del MBR en una dirección fija de la memoria
para luego darle el control

Este código arrancará seguidamente el sistema operativo,
ya sea desde el disco duro o desde un Boot-Loader o cargador,
algo más complejo como por ejemplo LILO, GRUB o GAG

> **Nota!** Algunos virus atacan el sector de arranque cambiando librerias
para cargar los virus completamente al iniciar el sistema

#### UEFI
_Unified Extensible Firmware Interface_  
Extension de interfaz para tener boots seguros  
Verifica que el firmware BIOS y software utilizados esten firmado por los fabricantes
(es la evolución del EFI)

Busca una capa de seguridad y chequea los modos y drivers del sistema

> **Nota!** Cuando uno compra un laptop deberiamos quitarle:
- Quitar conexion segura (secure boot)  no todas las distribuciones tienen firmado el _UEFI_

Con `# fdisk -l /dev/xvda` muestra el tipo de tabla de cada particion  
Buscar la linea `Disklabel type: ***`

#### Tabla de particiones _DOS_
DOS permite 4 particiones primarias

`# fdisk` es un comando especial para para particiones tipo _DOS_

#### Tabla de particiones _GPT_
GPT permite tener 128 particiones en un disco duro

`# gdisk` es un comando especial para particiones GPT

Con `# gdisk -l /dev/xvdh` muestra el tipo de tabla de cada particion

Puedes buscar el resto de opciones usando `?`

#### Crear particiones con gdisk
Para acceder a configurar las particiones del disco ejecuta `# gdisk /dev/xvdh`
- Usamos la opción `n` para crear una nueva  
  Especificamos el _número_ de la partición  
  Asignamos el _tamaño_ de la partición `+1G`

Seleccionamos el tipo de partición, por ejemplo 8300 para cargar tipo Linux filesystem
