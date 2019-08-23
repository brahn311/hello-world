Administrar discos duros con LVM

LVM nos permite realizar la configuración de discos duros y permita administrar el espacio de almacenamiento del servidor

Genera un arreglo de particiones unificando varios disco duros y redistribuyendo sus particiones
_Maximo hasta 128 particiones_

#### Instalacion
_LVM_ ya biene instalado en _Ubuntu_ pero en _Debian_ no esta preinstalado

Para instalar usamos `# apt-get install lvm2`

#### Crear volúmenes físicos
Toma particiones y las configura como un dispositivo distinto
- Crear la partición a los volúmenes físicos del LVM `# pvcreate /dev/xvdf3`
- Remove particion `# pvremove /dev/xvdf3`
- Resize
- Listar volúmenes `# pvs` lista los discos en los volúmenes lógicos
- Scan `# pvscan` muestra la configuracion actual del sistema

**_Antes debemos_** peparar los discos físicos que vamos a usar para crear el LVM:
- Modificamos el disco `# fdisk /dev/xvdf`
  - Ver listado de particiones `p`
  - _Borramos_ una particion `d`  
    Seleccionamos: _particion_ `3`
  - Creamos una _nueva particion_ `n`  
	Seleccionamos: _primaria_ `p` _numero_ `3` _desde_ ` ` _hasta_ ` `
  - Cambiamos el _tipo de partición_  
    Seleccionamos: `t` _numero_ `3` _tipo_ `8e`
  - Guardamos los cambios `w`

> **Nota!** Debes hacer estos cambios con la particion desmontada  
Al agregar si la particion tiene etiqueta pide confirmar para eliminar la etiqueta

**Antes de continuar**
- Añadiremos un nuevo volumen de 100G
- Usa el comando `# dmesg` para verificar que se montó el disco duro que creado
- Agregamos ese nuevo disco al volúmenes físicos del LVM  `# pvcreate /dev/xvdg`

#### Grupos logicos
Permite tener una especificacion fisica al luego sacar los volumen logicos

- Grupo `# vgcreate databases /dev/xvdf3` se agrega la partición a un grupo
  - `databases` nombre para el volumen (descriptivo segun su uso)
- Listar grupos `# vgs` listar los grupos de volumenes
- Extender `# vgextend /dev/xvdg` añade el discoduro a ese volumen
- Mostrar `# vgdisplay`describe las caracteristicas de los volúmenes
- Reducir `# vgreduce databases /dev/xvdg` remueve una partición del grupo

#### Volumenes lógicos
Al grupo logico se puede dividir para mapear varias particiones
- Crear `# lvcreate -n postgres -L 10g databases` crea partición usando el espacio de un grupo
- Extender `# lvextend -L+10G /dev/databases/posgress` tamaño de la partición
> **Nota!** `lvextend` Extiende en caliente la particion montada, no modifica el filesystem  
Puedes solucionarlo usando `resize2fs`

##### Actualizar tamaño del filesystem
`# resize2fs /dev/databases/posgress`

Las particiones tipo LVM no aparecen cuando usamos `# fdisl -l /dev/xvdg`
