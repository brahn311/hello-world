# Monitorear, eliminar y establecer prioridades en procesos

Todo lo que se corre (ejecuta) en un sistema linux son procesos,
los procesos corren: _un programa, serie, script_ (cualquier cosa)

Los procesos permiten al sistema operativo trabajar,
y decirle al CPU cuando y como ser ejecutado y operado
definiendo cuando se debe procesar información

Los procesos en Linux están encapsulados,
esto quiere decir que el usuario que lanzo el proceso es quien lo debe quitar

Eventualmente un super usuario o root pueden quitar tambien un proceso,
aunque no es lo normal

Un proceso deberia ser realizado por un usuario sin permisos de root,
para evitar accesos al mismo.  
Esto es valido para casos que un atacante ejecute un proceso remoto,
solo este expuesto el usuario que lo este corriendo y no todo el sistema

Ventajas:
- Evita vulnerabilidades por el acceso indebido al root por medio de escalamientos

Todo proceso en Linux tiene un número único (PID) _ProcessID_
(los que usas para identificar el proceso y matarlo con `# kill -9 [PID]`)

#### `ps`
Permite mirar la lista de todos los procesos con configuraciones [opciones] extras

- Listar procesos del sistema `# ps aux`
  - Puedes usar `# ps aux | grep [servicio]` para buscar especificos

##### Practica
Observando el proceso _nginx_`ps aux | grep nginx`  
Encontraras _3 procesos_
- root (Inicializa el proceso padre)
- www-data (opera el proceso real del servidor encapsulado en el padre)
- root (proceso del _ps_ con _grep_)

#### `htop`
Tiene varias formas de configuracion, y muchas colunmas y datos para agregar  
Podemos identificar:
`CPU` `Men` `Swp` `Task` `thr` hilos
`Load average 0.00 0.00 0.00` carga del sistema (procesos que trabaja la CPU) Ultimo 1min, 5min, 15min

##### Carga del computador
Es normal que si tenemos 8 CPU, el numero de 1min sea hasta 8,
si es mas de 8 podemos presentar cuellos de botella (mandan mas procesos sobre la capacidad del CPU),
se presenta gastos al switchear CPU y procesos.
El switcheo tarda mas, es mas lento que resolver o terminar un proceso
> **Nota!** importante para operar sistemas embebidos, analisis de datos, procesar millones de datos en clusters
verificar el numero de procesos en el ultimo minuto (1min) y el numero de hilos (thr) 500-2000  
(multiplicar CPU por 2 para calcular hilos)

- Instalar `# apt-get install htop`
- Revisar carga del sistema `# htop`
- Arbol de procesos `F5` / Similar a `# pstree`
- Matar procesos `F9` (y muestra listado de las señales para kill)
- Aumentar prioridad NICE `F7`/ Disminuir prioridad `F8`

##### Señales basicas
- 1 SIGHUP _reinicia el servicio si matarlo_
- 9 SIGKILL _matar proceso completamente sin importar lo que hace_
- 15 SIGTERM _cerrar proceso correctamente_

##### Prioridad `NICE`
Los procesos puede tener un valor de prioridad desde -20 hasta 19 (NICE)
- -20 mayor prioridad del sistema
- 19 es una menor prioridad

##### Cambiar prioridad a _nginx_
- Puedes hacerlo por `# htop` + `F7`
- Otro metodo es con `# nice -n0 [servicio]`

> **Nota!** Lo comun es ajustar el nice con el proceso cerrado,
para que al iniciar trabaje con el valor configurado

#### `# pstree`
Arbol de todos los procesos
- Ver los numero de procesos `# pstree -p`

#### Prueba: matar _nginx_
Como _nginx_ posee 2 procesos
Al matar al ultimo proceso del arbol este no cierra, debido a que el padre puede iniciarlo nuevamente  
Al matar el proceso padre, ya si deja de ejecutarse el hijo y no se inicia nuevamente

#### `# kill [-señal] [PID]`
Para matar un proceso enviamos la señal
- `-9` Matar sin importar lo que el proceso diga

> **Nota!** Si kill no da error significa que mato o finalizo el proceso correctamente

#### `top`
Un comando con un programa similar a `htop`, anterior, con la misma funciones pero mas complicado de usar
