# Compilar un programa en Linux
Muchas veces tenemos que compilar paquetes en Linux
En Debian y Ubuntu bajamos los paquetes ya precompilados

#### Proceso de compilar
Instalar asistente para compilación
`# sudo apt-get install module-assistant`

Preparar el sistema, instalando los paquetes requeridos:
sudo m-a prepare

Agregar fuente de datos habilitando fuentes deb-src:
sudo vim /etc/apt/source.list,

Instalar dependencias del paquete
sudo apt-get biuld-dep [nombre del paquete]

Compilar
sudo apt-get source -b [nombre del paquete]
