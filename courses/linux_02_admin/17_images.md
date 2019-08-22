# Generar imágenes de discos duros
Veamos algunas herramientas para:
- Sacar backups
- Recuperar _mbr_ de un disco
- Imágenes de discos duros
- Crear archivos de Ceros

#### Crear imágenes con `dd`
El comando `dd` permite crear información o copiar archivos de un lado a otro  
Uso comun: sacar una imágen completa del disco duro para realizar la imagen

Primero debemos estar seguros que tenemos la partición desmontada
- Verificamos las particiones con `# fdisk -l`
- En `/tmp` montamos la particion `/dev/xvdf6`
- Usamos `# cp -ra /var /tmp/xvdf6/var` para copiar el contenido de `/var` (generara algunas advertencias)
  - `-r` = recursivo
  - `-a` = preservando todo, permisos, passwords
  - `/var` =  origen de la data
  - `/tmp/xvdf6` = destino de la data
- Con `# du -sh` comprobamos el espacio usado luego de copiar
- Con `# df -h` vemos las particiones y su información, tamaños y espacio usado
- Desmontamos la particion `# umount xvdf6/`
> **Nota!** Como en las particiones se generan logs, se debe desmontar la particion antes de crear imagenes

#### Usamos el comando:
Creamos una imagen byte a byte de una particion  
`# dd if=/dev/xvdf6 of=/var_new/backup/backup_xvdf7 bs=1MB`
- `if=` es la partición que deseamos hacer la imágen,
- `of=` es donde se va a guardar la imagen
- `bs=` cantidad de datos que ira procesando

#### Montar una imagen con loop
Podemos usar un _.iso_ y montarlo para acceder a los datos _tal como funciona un cdroom_

- Primero debemos activar el módulo del kernel con `# modprobe loop`
- Una vez activo, creamos la carpeta donde se montara la imágen con `# mkdir /tmp/iso_debian` recuerda puedes seleccionar la ruta que desees
- Ahora con `# mount debian.iso /tmp/iso_debian -o loop` estamos montando la imágen

> **Nota!** Recuerda debes estar seguro de la ruta del archivo  
Los archivos de la imagen estaran en solo lectura

#### Escribir un archivo lleno de ceros
En linux existe una ruta `/dev/zero` esta siempre va a devolver cero  
Uso: calcular o testear la velocidad en que escribe en disco una cantidad de data determinada

- Podemos crear el archivo con `# dd if=/dev/zero of=zeros100M bs=1M c=100`
- Usamos `# sync` obliga al discoduro a actualizar la informacion del disco y actualizar la cache

#### Leer un archivo para medir la velocidad del disco
En Linux existe una ruta `/dev/null` la cual todo lo que enviemos va a desaparecer  
Uso: medir la velocidad de lectura del disco leyendo un archivo y enviando la información a null

- Tomar el archivo y leerlo `# dd if=zeros100M of=/dev/null bs=1M`
- Ver el archivo usado `# less zeros100M`
- Traducir formatos Hexadecimales `# hexdump zeros100M`
- Traducir formatos Hexadecimales `# hexdump -C zeros100M`

> **Nota!** Investigar mas sobre _hexdump_
