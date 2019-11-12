# Cómo manejar mi firewall
La configuracion del firewall es muy extensa

#### `iptables`
Estandar actual en linux para configurar el firewall  
Permite transmitir la información entre las interfaces de red y el sistema operativo  
Por defecto el firewall tiene algunas políticas generales agrupadas en tablas

Las distintas tablas estan compuestas por multiples reglas ordenadas  
El orden de las reglas es de arriba hacia abajo con comportamiento en cascada,
donde unas reglas modifican otras inferiores

- `iptables -L` Listar información del firewall
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

##### Script firewall `firewall-block`
Script para cn
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
#
# have many "internal" networks.

iptables -A block -i lo -j ACCEPT
iptables -A block -i $INTIF --destination $INTOP -j ACCEPT

# Allow external ping
#iptables -A block -p icmp --icmp-type 0 -j ACCEPT
#iptables -A block -p icmp --icmp-type 8 -j ACCEPT

# Log unwanted packages. since this can generate quite a lot of ouput, it is disabled by default.
iptables -A block -j Log

# Reject everything else
iptables -A block -j REJECT

# ...falta mas texto

```
Observaciones:
 - Es una buena politica bloquearlo todo sobre todo si:
   - Un programa se instala y abre puertos igual se bloquearan
   - Si olvidas cerrar algun otro puerto
 - Flush: borra cualquier tabla o registro que aparezca en algun momento
 - -N block: crea nueva tabla para agregar registros

> minuto 8:51

- `iptables -A INPUT -i eth0 -p tcp --dport 22 -j ACCEPT`
Aceptar conexiones de un puerto especifico

Guardar las reglas
iptables-save > /etc/iptables.rules
