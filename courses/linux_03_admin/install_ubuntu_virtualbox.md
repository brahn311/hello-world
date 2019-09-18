# Instalacion de Ubuntu Server
Se instalara Ubuntu 18.04LTS

Curiocidades de Ubuntu
- Mas utilizado para desplegar paginas web
- Canonical dejo de crear 32bit desde la version 16

Estadisticas actualizadas (2019)
Servidores web en el mundo:
- 70.6% Unix
- 29.4% Windows

Distribuciones Unix
- Ubuntu 37.69%
- Debian 21.3%
- CentOS 17.1%

LTS significa: Soporte extendido, aproximadamente 5años  
En caso de no tenerlo, regularmente posee soporte por 9 meses

> **Nota!** Fuente: w3tech, distrowatch

#### Descargar VirtualBox
1. Abrir VirtualBox, Acceder a: Nueva
   - Nombre (si es reconocido se autocompleta)
   - Tipo: Linux
   - Version Ubuntu (64-bit)
   - Siguiente
1. Memoria: 1G (512M minimo) Valido porque no usaremos interfaz
1. Disco duro:
   - Crear un disco virtual ahora
   - Selecciona: VDI (VirtualBox Disk Image)
     - VHD o VMDK es para cuando se obtiene la maquina de otro virtualizador
   - Reservado dinamicamente (el disco crece en medida que crecen sus archivos)
1. Ubicacion del archivo
   - Nombre del archivo: (a escojer)
   - Tamaño del disco en megabytes: 10GB

#### Descargar el ISO de Ubuntu
1. Siempre instala versiones LTS
   - Ubuntu-18.04.2-live-server.amd64.iso
1. Verificar sha256sum
   - `$ sha256sum [archivo]` debe coincidir el generado con el del proveedor  
     En caso de error el archivo debe esta corrupto o fue manipulado

#### Configurar VirtualBox
1. Clip de opciones de la maquina > Configuracion
1. Red > adaptador 1
   - Conectado a: Adaptador puente
     - Seleccionar: enp4s0 (red cableada)
     - docker0
     - wlp2s0 (red WIFI)
   - Avanzadas
     - Modo promiscuo: permitirlo todo
     - Seleccionar: Cable conectado
1. Almacenamiento
   - Dispositivo: Controlador IDE > CD >
   - Unidad optica (CD): Seleccione archivo > ISO descargado en discoduro
   - Aceptar

#### Instalar la instalacion:
1. VirtuaBox > Iniciar
   - Abre una ventana nueva, al tocarla sale un mensaje, presionar: Capturar
1. Seleccionar el idioma
1. Comprobar memoria (para servidores fisicos, no virtuales)
1. Instalar Ubuntu Server (abre instalador por consola, no grafico)
1. Seleccionar idioma del teclado (seleccionar ingles, comun por proveedores)
   - Layout: ingles
   - Variant: ingles
1. Instalar Ubuntu
1. Conexiones de red
   - Dejar dhcp en automatico `enp0s3  eth  (from dhcp)` Podemos editarlo y configurar el ipv4
   - Hecho
1. Configurar proxy > Hecho
1. Direccion espejo Ubuntu > Hecho (no modificar a menos que la conexion a internet sea muy lenta)
1. Sistema de archivos
   - Selecionamos: Disco entero (Buena practica para manual: Separar logs, home)
   - Ver resumen > Hecho
   - Mensaje de confirmacion "perdida de datos" > continuar
1. Perfil del servidor
   - Nombre: (como se ubicara o reconocera el servidor en la red)
   - Nombre de usuario (con permisos administrativos / comandos `sudo`)
   - Contraseña y confirmacion (alfanumericas, caracteres>8)
1. SSH
   - Selecciona: Install OpenSSH server
   - Importar identidad: No > Hecho
1. Instalar aplicaciones opcionales
   - No seleccionar ninguna > Hecho
1. Esperamos a que finalice la instalacion
1. Reiniciar ahora
