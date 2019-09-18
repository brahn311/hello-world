# Instrucciones para instalar CentOS

#### CentOS Server 7
Distribucion gratuita basada en _Redhat_
- Aun tiene versiones con soporte 32bit

#### Redhat
Mas utilizado en aplicaciones empresariales  
Distribución basada en _Linux_ privativo de pago
- No acepta 32bit desde la version 7

1. Desgarcar CentOS www.centos.org
   - DVD ISO
1. Crear la maquina virtual en VirtualBox
   - OS: Linux, 64bit
   - Memoria: 1024M de ram
   - Disco virtual: VDI (8GB)
   - Reservado dinamicamente
   - Crear

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
1. Install CentOS 7
   - Idioma English / English
1. SYSTEM / NETWORK & HOST NAME
   - Activar la interfaz: enp0s3 (cableada)
   - Host name: (nombre de la maquina en la red)
1. INSTALLATION DESTINATION
   - Seleccionamos_ ATA VBOX HARDISK
   - Done
1. DATE & TIME
   - Region, City (hora base para el sistema, los registros quedaran con esa zona horaria)
1. Began Install
1. USER SETTINGS
   - STRONG Password root: caracteres > 8, alfanumerica, no este en diccionarios
1. USER CREATION
