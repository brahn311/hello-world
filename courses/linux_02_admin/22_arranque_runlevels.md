# Arrancando el sistema runlevels, systemd
Todo sistema tiene distintas formas de arrancar,
Es importante conocer los niveles donde se estan ejecutando las cosas

En Linux por defecto han existido 6 niveles que todos los programas arrancan

Por ejemplo:
Al levantar un servicio, los programas se ejecutan
dependiendo de una serie de dependencias (orden de arranque del sistema)
1. Cargar un Firewall o sistema de seguridad
1. Arrancar la Interfaz de red
1. Cargar modulo de Interfaz de red
1. Cargar el kernel

#### Niveles de servicio
Se pueden ver en la carpeta `/etc` en las carpetas 
desde `/etc/rc0.d` hasta `/etc/rc6.d`
- 0 Alta o carga del sistema
- 1 Usuario (control o recovery)
- 2 Multiusuario sin red
- 3 Multiusuario soporte con red
- 4 *
- 5 Partes interfaz grafica
- 6 Reiniar

Dentro de estas carpetas los archivos que inician con:
- `S` _es de arranque_ 
- `K` _es de salida_
- la numeracion `01` `02` _indica la prioridad para ejecutar_

- `# runlevel`  
Dice en qué sistema se está iniciado o corriendo

#### `systemd`
Permite saber el árbol o hilo de procesos  
Indica las dependencias de estos procesos o servicios
(es decir, si un servicio se apaga, cuantos procesos se apagan con ese)

Tambien puede cargar procesos en paralelo para obtener cargas mas rapidas

Para interactuar con systemd usamos el comando `# systemctl`

- Para ver servicios que poseemos`# systemctl`
- Listar dependencias `# systemctl list-dependencies [servicio]`
  - En el arbol, el punto que esta en rojo no esta cargado
- Ver un servicio `# systemctl show [servicio]`
  - `CPUQuotaPerSecUSec=infinity` filtrar o asociar cuotas de cpu
  - `*` pinear a un CPU 
  - `LimitCPU=[18446744073709551615]` limitar memoria CPU

> Minuto 8:38

- Buscar servicios `# ps aux | grep [servicio]`
- Recargar un servicio `# systemctl deamon-reload`
- Reiniciar un servicio `# systemctl restart [nombre]`
- Estado de un servicio `# systemctl status [nombre]`
