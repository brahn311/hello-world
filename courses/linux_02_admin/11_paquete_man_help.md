# Dónde encontrar la documentación de los programas

Existen dos formas de acceder a la documentacion de un paquete
- Via paquete independiente
- Via programas como `man` o `info`

> **Nota!** La documentacion es importante al momento de entregar el servidor

#### Via paquete independiente

Al instalar el paquete apache2 `$ apt-get install apache2`
podremos buscar en el log del CLI si el paquete trae por defecto documentacion

Podremos ver si un paquete posee alguna paquete interno de documentacion con
`$ apt-cache search apache2-doc`

La documentacion la podemos identificar porque
el nombre de ese paquete regularmente termina con `-doc` (Debian o Ubuntu)

> **Nota!** En este caso _apache2_ posee la documentacion en un paquete separado

De igual forma instalaremos el paquete `libapache-mod-jk-doc`
`$ apt-get install libapache-mod-jk-doc`

Cada distribución tiene un lugar donde guarda la documentación de los paquetes
En ubuntu encuentras la documentación en `/usr/share/doc`

Que aparece en la documentacion (entre otros):
- README.gz (comprimido)
- NEWS.gz
- examples

Para ver archivos comprimidos _**sin descomprimir**_ usa el comando
`$ zless pakage_name.debian.gz`

#### Via programas

Utiliza comandos para hacer busquedas u conocer/configurar/usar un paquete

Programas que muestran la documentación del programa
- `man`
- `info`

Comando:
`$ info paquete`
`$ man paquete`
