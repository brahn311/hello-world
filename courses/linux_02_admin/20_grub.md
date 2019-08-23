# Administrar el arraque del sistema GRUB
El GRUB es gestor de arranque, que permite cargar el kernel y el sistema.

Archivos de configuración
En la carpeta /etc/grub.d vemos los archivos del grub.

/boot/grub/grub.cfg es el archivo de configuración, pero no modifiques este archivo, para configurarlo usa /etc/grub.d

El grub se coloca en el MBR, que esta en los primeros 512 Bytes del disco.

Backup del MBR
Podemos generar un backgrup del MBR con dd

dd if=/dev/dvda of=/root/mbr_backup bs=512 count=1

Actualizar grub
update-grub2
Instalar grub
grub-install /dev/xvdf
