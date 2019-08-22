# Formateo y montaje de particiones en Linux

Para almacenar datos en una particion, primero bebemos formatear

Es el sistema de archivos quien administra la forma en que se guardan los datos del sistema

Existen muchos tipos de sistemas de archivos,
cada uno tiene características que lo hacen útil para diferentes dispositivos

#### Formatear particiones
El programa _mkfs_ nos permite formatear una partición usando el sistema de archivos que queramos

Solo el comando `# mkfs.` muestra los formatos disponibles para usar

- **VFAT** `# mkfs.vfat /dev/xvdf1` para formatear la partición xvdf1 con FAT32 (para windows hasta xp, como memorias usb)
- **EXT3** `# mkfs.ext3 /dev/xvdf5` para formatear la partición xvdf5 con EXT3
- **EXT4** `# mkfs.ext4 /dev/xvdf6` para formatear la partición xvdf6 con EXT4
- **XFS** `# mkfs.xfs -f /dev/xvdf6` para formatear la partición xvdf6 con XFS (recomendada para mongoDB en su documentacion)
- **NTFS** (windows server hasta ahora)

> **Nota!** _mkfs_ no pide ningun tipo de confirmacion
   En caso de que ya tenga formato distinto, debes añadir `-f` para forzar

#### Montar las particiones
Debemos crear un directorio por cada partición que deseamos montar

> **Nota!** es buena practica crear las carpetas de acuerdo a las particiones

En este caso usaremos _tmp_ dentro de esta carpeta podemos ejecutar los comandos:
- `# mkdir xvdf1`
- `# mount /dev/xvdf1 /tmp/xvdf1`
- `# mkdir xvdf3`
- `# mount /dev/xvdf3 /tmp/xvdf3`

#### Desmontar una partición
Para poder desmontar una partición, debes no estar sobre la partición

Puedes ejecutar el comando `umount /tmp/xvdf1`  
En este caso `/tmp/xvdf1` sera  donde tendremos montada la partición

##### Listar puntos de montaje
El comando `# df -h` nos lista los directorios que están montados y sus espacios disponibles

#### Montar particiones automaticamente
Para montar las particiones de forma automática podemos editar el archivo `/etc/fstab`
Debemos añadir:

```
/dev/xvdf3    /var_new    ext4    defaults,discard    0 0
```

- `/dev/xvdf3` nombre del disco y su numero de particion o _UUID_
- `/var_new` nombre de la carpeta donde estara montada la particion
- `ext4` formato de la particion
- `defaults,discard` son opciones para la particion

> **Nota!** Cada tipo formato tiene distintas opciones y formas de  _buscar en google_
---
**Reto:**
Montar la particion _xvdf6_ de formato _xfs_ ubicada en `/var/base_de_datos`
