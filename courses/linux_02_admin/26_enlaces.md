# Enlaces duros, simbólicos y sistemas de backups
Linux permite enlaces que apunten a otros archivos a diferentes archivos

#### Enlace simbolico
Un archivo sin datos, que solo contiene una referencia a la ubicación del archivo original  
_Distinto a windows que los enlaces son archivos con cierta informacion dentro_

Donde usar enlaces simbólicos:
- Archivos de configuracion:  
Activar o desactivar e intercambiar archivos,
solo modificamos el enlace simbolico y reiniciamos el servicio (buena practica)

- Crear enlace simbolico `ln -s [archivo] [ruta_ubicacion_nombre]`

> **Nota!** muestra que no tiene peso ni tamaño  
Puedes crear enlaces simbolicos a archivos y carpetas

USO: para apuntar

##### Ejemplo
`ln -s /home/ubuntu/archivo.iso debian.iso`

- El enlace se almacena es dentro del sistema de archivos
- Si se pierde el archivo original, al que apunta el enlace, el enlace se rompe
- Puedes cambiar el contenido del enlace final y el enlace seguirá funcionando

#### Enlaces duros
En un archivo enlazado al archivo original pero con un nombre diferente  
El enlace apuntara físicamente al archivo

`ln /home/ubuntu/archivo.iso debian.iso`

> **Nota!** Solo se puede hacer para archivos (no para directorios)  
Tiene la restriccion que debe estar el nodo y en enlace el mismo discoduro/particion

USO: para backups
