# Seguridad del kernel
El kernel es la pieza fundamental del sistema operativo  
Interactua entre el hardware y los programas que se están ejecutando  
Asigna los recursos a cada programa que opere
Evita inconvenientes al ejecutar procesos muy recurrentes

Por defecto el kernel de Linux está bien asegurado, tiene valores limites por defecto  
Aunque en ocaciones para mejorar performas de ejecuciones uno debe ampliarlos

> **Nota!** al instalar mongoDB ellos recomiendan setear el type _soft_ y _hard_ de _nofile_ entre otros
para mejorar el performance

#### Modificar límites
1. Con `$ sudo su`
1. `# less  /etc/security/limits.conf` encuentras la configuración de límites del kernel
   - Dentro veras las instrucciones e items de configurarcion de limites
   - <domain> <type> <item> <value>
1. El dominio puede ser * (sin importar el usuario)
1. Añadimos las configuraciones requeridas
```
*  soft  nofile  32000
*  hard  nofile  35000
```
1. reiniciar el sistema `reboot`
1.

De esta forma estamos estableciendo la cantidad de archivos que puede abrir el sistema al tiempo.

> **Nota!** Es posible que al configurar un servidor se deba ampliar `nofile` (archivos abiertos).  
Al abrir un proceso, este corre sobre un socket, y este permite o no la apertura de archivos.

#### Configurar `/etc/sysctl.conf`
Este archivo contiene opcions de configuracion sobre el kernel

Opciones que uno generalmente descomenta:
- `net.ipv4.ip_forward=1` permite enviar paquetes de NAT sobre el sistema (equipo como router en lan)

Otras opciones:
´´´
net.core.somaxconn = 4096

net.core.somaxconn = 65536             // aumentando cantidad de conexiones
net.core.rmem_max = 8388608            // memoria que se puede aumentar en el sistema ??
net.core.wmem_max = 8388608            // memoria que se puede aumentar en el sistema ??
net.core.netdev_max_backlog = 5000

net.ipv4.tcp_max_tw_buckets = 1440000
net.ipv4.tcp_fin_timeout = 30          // definir el tiempo del timeout del tcp
net.ipv4.tcp_window_scaling = 1
net.ipv4.tcp_max_syn_backlog = 65536   // escalar ventana

net.ipv4.tcp_tw_recycle = 0            // reusar conexiones tcp
net.ipv4.tcp_tw_reuse = 0

#redis
vm.overcommit_memory=1                 // sobrepasar memoria del sistema
´´´
- `# ulimit -a` Para ver como quedaron las confituraciones  
Muestra: <items> <size, -[opcion]> <value>  
Entre los parentesis `(-[opcion])` esa opcion la podemos usar para configurar los valores
- `# ulimit -[opcion]` Para ver como este ese valor unicamente

##### Modificar opcion por comandos
1. Usar `# ulimit -[opcion] <value>` para modificar directamente ese valor
1. cada cambio ejecutar `# sysctl -p` para guardar cambios y setea el sistema

> **Nota!** Investigar en internet cada item, sus usos y sus configuraciones
