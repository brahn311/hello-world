# Estructura de archivos en Linux

Directorios en la arquitectura Linux
- `/` Raiz

> **Nota!** Recuerda: Todo en Linux es un archivo

Directorios importantes
- `/home` se almacenan _todos_ los archivos y cnnfiguraciones de cada usuario creado
- `/lib` almacenas las librerías del sistema
- `/mnt` cuando montamos en el sistema dispositivos, los podemos ver en esta carpeta
- `/opt` almacenas los programas instalados de terceros
- `/proc` información sobre el estado del sistema, procesos en ejecución
- `/root` almacena los archivos del super usuario Root
- `/bin` o `/sbin` archivos binarios del administrador
- `/tmp` archivos temporales
- `/usr` programas instalados por defecto
- `/var` se utiliza para guardar archivos de logs, backups, servidor web
- `/etc` archivos de configuración del sistema
- `/boot` guarda los archivos del arranque del sistema

#### /lib
Linux (Debian/Ubuntu) Soportan librerias de 32 y 64 bytes (multiarquitectura)

Linux esta compilado de forma dinamica, las librerias son necesarias para correr cualquier binario

Otras arquitecturas donde cada una compilan binarios y librerias duplicandolas en cada aplicacion
- **Ventaja** de la comparación dinamica es que ocupa menos espacio por tener librerias compartidas
- **Desventaja** es que no es posible tener diferentes versiones de una misma libreria

#### /media o /mnt
Vemos los dispositivos de medios de almacenamientos que se montan (crean un punto de montaje de acceso) al sistema de archivos para que puedan usarse
- /media - particiones montadas automáticamente en el disco duro y medios extraíbles
- /mnt - sistemas de archivos montados manualmente en el disco duro

#### /opt
Programas instalados de terceros, que no son propios de la distribución

#### /root
Carpeta exclusiva para el administrador super usuario,
> **Nota!** No puedes acceder estando logueado como un usuario normal

#### /bin
son todos los archivos binarios que se pueden ejecutar en cualquier momento
- `/sbin` estan los binarios para el super administrador

#### /usr
Se encuentran instalados todos los programas por defectos de la distribución

Comando para mirar que posee instalado una aplicacion
- `$ dpkg -L firefox`

#### /var
directorio usados anteriormente entre 1990-2000, posee los correos que se manda del sistema localmente
Tiene configuraciones de backups, cache de descargas de los sistemas, temporales, servidor web, logs

#### /etc
El mas importante de todos, estan todos los archivos de configuracion del sistema

#### /boot
particion aparte o independiente, se puede encryptar
posee el aranque, inicio de la plataforma y arrancar el sistema

---
Para investigar:
- `/dev` los ficheros de dispositivo
- `/initrd` usado cuando se crea un proceso de arranque initrd personalizado
- `/lost+found` proporciona un sistema para los ficheros que existen debajo de `/`
- `/srv` puede contener archivos que se sirven a otros sistemas
- `/sys` archivos del sistema (system)
