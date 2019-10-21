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
Como administradores, la mejor practica es operar sobreseguros con el _que tal si..._  
Al comando lo podemos extender para convertirlo en un script para tener un plan B  
`iptables -P INPUT DROP; sleep 10; iptables -P INPUT ACCEPT`

> **Nota!** Cuando usamos el comando sleep, no podemos ejecutar mas nada por dicho tiempo  
Si el INPUT queda en DROP la unica manera de volver a entrar es reiniciando la instancia

> minuto 8:06

- `iptables -A INPUT -i eth0 -p tcp --dport 22 -j ACCEPT`
Aceptar conexiones de un puerto especifico

Guardar las reglas
iptables-save > /etc/iptables.rules
