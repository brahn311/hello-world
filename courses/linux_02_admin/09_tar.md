# Empaquetar y comprimir archivos en Linux
Empaquetar y comprimir son procesos diferentes

**Empaquetar** reunir varios archivos en uno solo
**Comprimir** reducir el tamaño de un archivo generando una versión nueva del archivo
de menor peso pero sin perdida de información

### Tar
Programa manejador de paquetes, posee muchas opciones  
Para ver toda la ayudas de _tar_ `$ man tar`

Las opciones principales para usar _tar_:
- `x`: Extract
- `c`: Create an archive
- `z`: Use gzip to compress the archive
- `v`: Verbose mode, show the progress of the creation process
- `f`: File name of the archive

#### Solo empaquetar y desempaquetar
- `$ tar cvf [ruta_destino/file_name].tar [ruta/folder_a_empaquetar]` empaquetar un directorio
- `$ tar xvf [ruta/file_name].tar` desempaqueta el archivo

> **Nota!** al empaquetar y desempaquetar se mantienen los permisos originales de cada archivo

#### Empaquetar y comprimir
- `$ tar cvfz [file_name].tar.gz [folfer_a_comprimir]` empaqueta y comprime a la vez
- `$ tar xvfz [file_name].tar.gz` descomprime y desempaqueta un archivo

> **Nota!** si solo desean empaquetar o desempaquetar un _tar_ sin comprimir,
deben quitar la `z` de las opciones y la extension `.gz`

#### Solo comprimir
Usaremos el programa _gzip_ para comprimir cualquier archivos, añadiendole la extension `.gz`  
- `$ gzip -9r [file_to_comprimir]` comprime, añade extension y no cambia su ubicacion
