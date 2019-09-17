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
  - Buscar palabra dentro del show : `/palabra_a_buscar`
- Ver configuracion de arranque de servicio `# systemctl cat [servicio]`
  - Ejemplo `# systemctl cat nginx`
  - Observaremos como esta arrancando y cual es el script que utiliza
- Ver el estatus del servicio `# systemctl status [servicio]`
  - Muestra: status, sgroup (seguridad), log basico
- Recargar un servicio `# systemctl deamon-reload`
- Reiniciar un servicio `# systemctl restart [nombre]`
- Desactivar servicio al inicio `# systemctl disable nginx.service`  
(al reiniciar la maquina el servicio no se iniciara)  
- Ver todos los comandos `# systemctl --help`

#### Prueba con nginx
1. `# systemctl status nginx`
1. `# ps aux | grep "nginx"`
1. `# kill -9 1292` 
1. `# systemctl status nginx`
1. `# systemctl cat nginx`
   - Buscamos donde esta programado el servicio:  
     `# /lib/systemd/system/nginx.service`
   - Editamos el archivo  
     `# nano /lib/systemd/system/nginx.service`
   - En `[Service]` añadimos las lineas:  
     `Restart=on-failure`  
     `RestartSec=2s`
   - Guardamos los cambios
   - Verificamos los cambios `# systemctl show nginx` aun no aparecen
   - Recargamos los servicios del sistema `# systemctl daemon-reload`
   - Verificamos los cambios `# systemctl show nginx` ya aparecen
   - Reiniciar el servicio `# systemctl restart nginx`
1. Reiniciamos el servicio (porque estaba muerto por kill)
1. Volvemos a matar el servicio
1. Consultamos el estatus (estara activo) se inicia solo automaticamente
> **Nota!** Si no recargamos no veremos los cambios

#### Utilidades
- Configurar los arranques para activarlos o desactivarlos y ahorrar recursos

##### Practica con postgresql
1. Instalar PostgreSQL `# apt-get install postgresql`
1. Consultamos `# systemctl status postgresql` (iniciada)

#### Iniciar/matar servicio (Metodo antiguo)
- `# /etc/init.d/postgresql` Ver script de arranque  
  - (`/etc/init.d` es un directorio)

