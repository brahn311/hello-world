# Manejo de DNS y dig
El DNS permite mapear un nombre de dominio a una dirección IP  
Facilita la incomodidad de aprenderse las IP de cada sitio frecuente que visitamos

#### `/etc/host`
Guarda la lista de IPs y nombres asignados en la máquina
Es el primer archivo que se modifica  
Alli agregamos los nombres de lo que uno (como administrador) esta configurando  
Como se manejan multiples conexiones IP, sean:
- Bases de datos
- Servidor de aplicaciones
- Bases de datos de cache

Estas nuevas configuraciones son tomadas en cuenta
sin importar lo que este almacenado en el DNS general

##### Configuracion
- Recordar IPs: _agrega en una linea nueva_ `IP dominio`

> **Nota!** Haciendo `$ ping [dominio]` puedes ver la IP de dicho dominio  

#### Amazon Route 53
Servicio especial para configurar DNS
1. Create hosted zone
1. DNS management > Get started now
1. Create Hosted Zone
   - Domain Name: [platzi.com] _your domain_
   - Comment:
   - Type: Selecciona "Public Hosted Zone"
> **Nota!** Se asignan servidores para resolver ese dominio creado  
En este ejemplo esa configuracion no afecta a platzi.com,
solo queda decirle a nuestra instancia que escuche esas direcciones  
1. Configurar la instancia a que escuche los servidores para resolver DNS
   - Entrar a `# vim /etc/resolv.conf`  
   (modo manual desde la instancia, nombrado pero no probado, usado Routes 53)
1. Create Record set
   - Name: `linux`.platzi.com
   - Type: A - IPv4 address
   - Alias: default
   - TTL: default
   - Value: [IP_servidor] _usaremos el IP de platzi_
> **Nota!** hasta aqui no es afectado el dominio hasta que se empiezan a usar comandos


##### Tipos de DNS
- A - direccion fisica IPv4
- CNAME - nombre
- MX - correo
- AAAA - dirección IPv6
- TXT - texto (spam y configuraciones extras)
- PTR - DNS reverso
- SRV -
- SPF -
- NAPTR -
- NS -
- SOA -

#### `dig` Consultar dominios
Programa que realiza querys al DNS
- Instalar: `# apt-get install dnsutils`  
_(el DNS esta en el puerto 53 por UDP)_

1. Con el comando `# dig [dominio]` Veremos a donde esta apuntando ese dominio  
Probaremos con _linux.platzi.com_ y dira que no apunta a nada
1. y

> minuto 7:58

dig linux.platzi.com a dns oficiales
dig linux.platzi.com @[servidor dns] a un servidor especifico
