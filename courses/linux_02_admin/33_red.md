# Configuración de red
Conecta a el servidor a internet  
Tambien puede conectar a una **VLAN** _red privada de area local_
(Donde se conectan diferentes servidores y se comunican entre ellos)

#### `ifconfig`
Permite:
- Ver la configuración de interfaces de red
- subir y bajar intefases de red
- Asignar ip
- Mirar MAC del equipo

`ifconfig --help`

**inet addr** es la ip interna de la vlan (amazon gestiona conexiones como vlan)

##### Desde console.aws.amazon
Revisando _Interfaces_ en amazon **VPC ID** es la identificacion de la vlan

En **NETWORK & SECURITY > Network Interfaces** podemos a una interfaz fisica crear sub-nets  
Esa nueva subnet se puede agrear a una instancia que este corriendo
- Recuerda colocarle un nombre: `eth1` para este ejemplo segun vemos especificado en `ifconfig`

Con `dmesg` o 'less /var/log/syslog`
deberiamos tener los log de que se reconoce la nueva interfaz (no funciono en el video)  
Se verifica usando `ifconfig eth1`

Puedes crear nuevas ip estaticas (elastic ip) y las asocias a instancias

##### De regreso en el servidor
- Inicializamos la interfaz creada  
`dhclient eth1`

- Editamos los archivos de configuración  
`/etc/network/interfaces` Archivo con las interfaces para cargar  
`/etc/network/interfaces.d` folder donde se leen todos los archivos .cfg
  - Para activar _DHCP automatico_ abrimos el archivo .cfg y agregar la linea:
  ```
  auto eth1
  iface eth1 inet dhcp
  ```
  - Para activar _IP estatica_
  ```
  auto eth1
  iface eth1 inet static
  ```
  - _auto_ indica que debe ser configurado en tiempo de arranque del sistema
  - _iface_ indica la interfaz a ser usada
  - _inet_ especifica que se use como interfaz la de red TCP/IP

- Apagar inferface de red  
`ifdown eth0`
> **Nota!** La interfaz debe estar previamente activada para poder apagarla  
Se debe tener cuidado de no apagar la interfaz donde se esta conectado,
esto ocaciona que pierdas la conexion y la unica forma de volver a conectar sera
reiniciando la instancia desde la consola de aws  
Desde Interfaces + Clic derecho > Interface state > reboot

- Activar o encender una interfaz
`ifconfig eth1 up` o `ifup eth1`

> **Nota!** Reiniciar todos los servicios de red `/etc/init.d/networking restart`

- Multiples ip sobre una misma interface  
Asignas a una interfaz una ip especifica, permite varias ip configuradas y funcionando (bridge)  
`ifconfig eth0:0 192.168.10.5`

#### Comando `ip`
Con este comando podemos sustituir ifconfig  
Es mas avanzado y mas complicado de configurar  
Permite:
- `ip addr show`, mostar las direcciones configuradas
- `ìp` muestra ayuda sobre sus opciones

#### Enrutamiento
Son reglas que definen para donde va cada paquete y en que direccion va  
En este caso no importa el paquete y lo que posee, sino, encausar el paquete  
En una ret NAT o tabla enmascara el paquete

- Ver la tabla de enrutamiento se puedes usar `route -n`
- Saber donde esta una ip `traceroute 8.8.8.8`

> **Nota!** Como practica trata de entar a la tabla de rutas del router/wifi Linux
