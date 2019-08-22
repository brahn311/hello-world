# Administración swap en Linux

El area de intercambio o partición swap,
Es muy útil para máquinas que tienen muy poca memoria RAM

> **Nota!** Si tienes buena RAM no es necesario usar
_swap_ porque como es escrita en disco es sumamente lenta
inclusive si es una SSD

Esta particion esta dispuesta como reemplazo o soporte adicional a la memoria RAM

En cierta época te tendia configurarse el doble de la RAM, pero con las mejoras a las RAM
indican que la mejor configuracion es tener una RAM con un tamaño de 5GB a 6GB

#### Ver memoria y swap

Con el comando `$ free` podemos ver el uso de la memoria y swap
```
brahn@brahn-swl:~$ free
            total		usado		libre 		compartido	búfer/caché	disponible
Memoria:	4000580     3064940      287320     169600      648320      510832
Swap:		7999484     1170976     6828508

```

También podemos instalar el paquete _htop_ y utilizar el comando `$ htop`

#### Crear partición swap
- Entramos al disco usando `fdisk /dev/xvdf`
- Podemos eliminar una partición o cambiarle el tipo
- Seleccionamos el tipo _82 Linux swap_
- Guardamos con `w`
- Formateamos la partición con `# mkswap /dev/xvdf5`
- Una vez creada podemos activarla con `# swapon /dev/xvdf5`
seleccionando la partición a la que le dimos formato swap
- Para quitar algo de la particion _swap_ `# swapoff`
- Puedes montar la particion _swap_ automanticamente o deneter la misma
editando el archivo _fstab_ añadiendo el _UUID_ de la particion,
o borrando la linea de la particion _swap_ respectivamente  
`UUID=[]	none	swap	sw	0	0`

> **Nota!** Si no marcas la particion tipo 82 y no formateas, genera error  
En el _fstab_ colocamos el punto acceso a la particion como `none`
de olvidarlo genera un _connection refused_
