# Cómo manejar mi firewall
La configuracion del firewall es muy extensa

#### `iptables`
Estandar actual en linux para configurar el firewall  
Permite transmitir la información entre las interfaces de red y el sistema operativo  
Por defecto el firewall tiene algunas políticas generales agrupadas en tablas

Las distintas tablas estan compuestas por multiples reglas ordenadas  
El orden de las reglas es de arriba hacia abajo con comportamiento en cascada,
donde unas reglas modifican otras inferiores

- `iptables -L` Listar información de reglas del firewall
  - **INPUT**: los paquetes que entran de hacia la entrada de la interfaz
  - **OUTPUT**: paquetes que salen de mi equipo a otro
  - **FORWARD**: paquetes que llegan y se redireccionan (para enmascarar para NAT)
- `iptables -L -t nat`
  - **PREROUTING**
  - **INPUT**
  - **OUTPUT**
  - **POSTROUTING**

- Detro de la tablas podemos modificar esas politicas:  
`ACCEPT` `DROP` `REJECTED` `LOGUEAR`

- `iptables -P INPUT DROP` Rechazar todos los paquetes de entrada  
Como administradores, la mejor practica es operar sobre-seguros con el _que tal si..._  
Al comando lo podemos extender para convertirlo en un script para tener un plan B  
`iptables -P INPUT DROP; sleep 10; iptables -P INPUT ACCEPT`

> **Nota!** Cuando usamos el comando sleep, no podemos ejecutar mas nada por dicho tiempo  
Si el INPUT queda en DROP la unica manera de volver a entrar es **reiniciando** _(reboot)_ esa instancia

#### Ejemplo de politicas de firewall
Script firewall `firewall-block`

```
#!/bin/sh

# eth0 es la interfaz de cara a internet
EXTIF="eth0"
EXTIP="190.26.2.2" # impsat

# eth1 es la interfaz de cara a la plan
INTIF="eth2"
INTNET="172.21.10/24"
INTIP="172.21.10.1"

OPENTCPPORTS="time,20,21,22,25,53,80,8080,10022,10023,443,995,9911,8280"; # Puertos TCP para abrir
OPENUDPPORTS="time,53"; # Puertos UDP para abrir

OPENINPUTTCPPORTS="22,80,443,8080,10022,8280"
OPENINPUTUDPPORTS="time,53"; # Puertos UDP para abrir

# Set the default policies: (cerrar todo)
iptables -P INPUT DROP
iptables -P OUTPUT DROP
iptables -P FORWARD DROP

# Flush chains:

iptables -F
iptables -t nat -F
iptables -X

# Create a new chain to use for both, the input and the forward chains:
iptables -N block

# Accept all oackages for existing connections
iptables -A block -m state --state ESTABLISHED,RELATED -j ACCEPT

# Allow all packets from internal networks
# ----------------------------------------
# In this example, 192.168.0.0/24 is the internal network and $INTIF its
# corresponding interface. You coult add multiple similar lines if you
# have many "internal" networks.

iptables -A block -i lo -j ACCEPT
iptables -A block -i $INTIF --destination $INTIP -j ACCEPT

# Allow new connections for a few "safe" ports
# Para quitar entrada desde afuera comentar las dos siguientes lineas
iptables -A block -m multiport -p tcp --dports $OPENINPUTTCPPORTS -j ACCEPT
iptables -A block -m multiport -p udp --dports $OPENINPUTUDPPORTS -j ACCEPT

# Allow external ping
#iptables -A block -p icmp --icmp-type 0 -j ACCEPT
#iptables -A block -p icmp --icmp-type 8 -j ACCEPT

# Log unwanted packages. since this can generate quite a lot of ouput, it is disabled by default.
iptables -A block -j Log

# Reject everything else
iptables -A block -j REJECT

# Add the block chain to both the INPUT and OUTPUT chains
iptables -A INPUT   -j block
iptables -A FORWARD -j block

# Allow output of local packets; use the following rules for all your
# network addresses. Note that if at least one of your interfaces uses a
# dynamically assigned address, you might want to drop the --source parameter.
# Or, if you know the network, specify the network rather than the IP
# address (as in 192.168.0.0/24)

iptables -A OUTPUT -o $INTIF --source $INTIP -j ACCEPT

# Reglas si no se permite todos los puertos de salida.
iptables -A OUTPUT -o $EXTIF -p udp --dport 53 -j ACCEPT

# Para sincronizar hora con servidores internacionales
iptables -A OUTPUT -o $EXTIF -p udp --dport 123 -j ACCEPT
iptables -A INPUT  -i $EXTIF -p udp --sport 123 -j ACCEPT

# Para resolver DNS realizar PING
iptables -A OUTPUT -o $EXTIF -p udp --dport 53 -j ACCEPT
iptables -A INPUT  -i $EXTIF -p udp --sport 53 -j ACCEPT
iptables -A OUTPUT -p icmp --icmp-type 0 -j ACCEPT
iptables -A OUTPUT -p icmp --icmp-type 8 -j ACCEPT

# Regla para permitir conexiones SSH
iptables -A INPUT -i $EXTIF -p tcp --dport 22 -j ACCEPT

# Reglas necesarias para FTP pasivo y activo. Se permiten las conexiones entrantes ya establecidas, el puerto 20 y 21 deben estar abiertos de salida
iptables -A INPUT -i $EXTIF -p tcp -m tcp --sport 20:21 -m state --state RELATED,ESTABLISHED -j ACCEPT
iptables -A INPUT -i $EXTIF -p tcp -m tcp --sport 1024:65535 --dport 1024:65535 -m state --state ESTABLISHED -j ACCEPT
iptables -A OUTPUT -o $EXTIF -p tcp -m tcp --dport 1024:65535 -m state --state NEW,RELATED,ESTABLISHED -j ACCEPT

# -Allow  output of any packets on the loopback interface
iptables -A OUTPUT -o lo -j ACCEPT
```

##### Observaciones:
 - Es una buena politica bloquear o cerrar todo sobre todo si:
   - Un programa se instala y abre puertos igual se bloquearan
   - Si olvidas cerrar algun otro puerto
 - Flush: borra cualquier tabla o registro que aparezca en algun momento
 - -N block: crea nueva tabla para agregar registros
 - Nosotros deberiamos permitir siempre las conexiones SSH
 - -dport: puerto de destino
 - -sport: puerto de origen (source) _el origen de la conexion_

> **Nota**: La instancia de Amazon no tiene previamente ninguna politica en firewall

##### Practicas
Aceptar conexiones SSH de un puerto especifico
- `iptables -A INPUT -i eth0 -p tcp --dport 22 -j ACCEPT`
  - En la tabla de INPUT (entradas) agregamos un nuevo registro
  - Reemplazamos `$EXTIF` por la interfaz usada, que es la `eth0`
  - Destino: es el puerto 22
- Reiniciamos `iptables -P INPUT DROP; sleep 10; iptables -P INPUT ACCEPT`
  - Ya con el `sleep` evitamos tener que reiniciar la instancia
- Comprobamos las politicas `iptables -L`
  - Nos debe mostrar la siguiente información
  ```
target     prot opt source      destination
ACCEPT     tcp  --  anywhere    anywhere     tcp spt:ssh
ACCEPT     tcp  --  anywhere    anywhere     tcp dpt:ssh
ACCEPT     tcp  --  anywhere    anywhere     tcp dpt:ssh
  ```

#### Diferencias entre DROP y REJECTED
Es necesario para evitar darle informacion a atacantes
de cuales puertos estan abiertos y cuales no lo estan   
`iptables -P INPUT REJECTED ; sleep 3 ; iptables -P INPUT ACCEPT` _(Este codigo da error)_
- `REJECTED` manda un mensaje informando que el puerto esta cerrado
- `DROP` no informa nada

> **Nota!** `REJECTED` no es una politica general, debe ser especificada dentro de las reglas que van por dentro

#### Guardar las reglas
- Guardar tablas en archivo de texto  
`iptables-save > /etc/iptables.rules`
- Guardar tablas en archivo de texto  
`iptables-restore < /etc/iptables.rules`
