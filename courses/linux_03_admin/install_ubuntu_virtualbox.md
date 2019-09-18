# Instalacion de Ubuntu Server
Se instalara Ubuntu 18.04LTS

Curiocidades de Ubuntu

Canonical dejo de crear 32bit desde la version 16

Estadisticas actualizadas

LTS significa: Soporte extendido, aproximadamente 5años  
En caso de no tenerlo, regularmente posee soporte por 9 meses

> **Nota!** Notas tomadas de

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

Instalar la instalacion:
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

> minuto 10:17

