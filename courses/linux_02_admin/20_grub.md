# Administrar el arraque del sistema GRUB
El GRUB es gestor de arranque,
permite cargar el kernel y el sistema

#### Archivos de configuración
En la carpeta `/etc/grub.d` vemos los archivos del grub  
Compuesto distintos archivos que empiezan con 2 digitos,
estos numeron definen como arranca el septor y cada configuracion
 - Estos archivos se deben editar para configurar el tiempo de espera y distintas opciones
 - `40_custom` `41_custom` es usado para configuraciones custom
 - Puedes añadir archivos extras con el numero que corresponda
 - `10_linux` prueba el kernel y crea los archivos necesarios para la configuracion

En `/boot/grub/grub.cfg` encontramos el archivo de configuración
que GRUB2 genera al compilarse gracias a los parametros de configuracion en `/etc/grub.d`

> **Nota!** No modifiques directamente el archivo `grub.cfg`

En `/etc/default/grub` encontramos las configuraciones predeterminadas del sistema

En las lineas 
- `GRUB_DEFAULT=0` modificas por cual kernel arrancas
(dependiendo que tengas varios kernes instalados)
- `GRUB_TIMEOUT_0=0` Tiempo de espera (5seg / 0seg para inicio automatico)
- `GRUB_TERMINAL=console` para definir inicio en consola o grafico

#### MBR
El grub se coloca en el _MBR_  
Se encuentra ubicado en los primeros 512 Bytes del disco  
- Puedes visualizarlo con `# less -f /dev/xvda`

> **Nota!** Es buena practica antes de trabajar o modificar el _GRUB_ realizar un respaldo

##### Backup del MBR
Podemos generar un backgrup del MBR con `# dd if=/dev/dvda of=/root/mbr_backup bs=512 count=1`
- Guarda copia del grub en un disco y recuperar el arranque del sistema
 
#### Actualizar grub
Con el comando `# update-grub2` para compilar `/etc/grub`
- Busca e identifica todos los kernel
- Por defecto carga el kernel de mayor numero (kernel mas actual)

#### Instalar grub
Usa `# grub-install /dev/xvdf` para instalar el GRUB ya compilado,
permite que el sistema arranque

> **Nota!** la mayoria de errores cuando el sistema no arranque
puede ser debido a mala configuracion del _GRUB_ o por el _MBR_ 
