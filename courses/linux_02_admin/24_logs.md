# Uso de redireccionamiento y pipes para logs
Una de las tareas de un administrador de linux es leer logs
- Muchas veces dispondremos de herramientas para centralizar logs
- En otras instancias tendremos que acceder desde los servidores

Lo Interesante disponer de herramientas adecuadas para la tarea
- Filtrar la informacion, ataques, contenido
- Conocer la  IP afectada o identificar el origen de los ataques o contenido

#### Aplicaciones
- `less` : permite ver de forma completa un archivo
- `more`: muestra el contenido del archivo de manera secuencial (presionando teclas)
- `grep`: busca contenido en un archivo
- `wc`: cuenta lineas de un archivo
- `head`: Muestra las primeras 10 lineas
- `gawk`: separar textos por espacios y extraer grupos específicos
- `cat`: concatenar archivos y mostrar por la salida estándar
- `tail`: ver las ultimas lineas de un archivos
- `|` (Pipe) Permite enviar datos de salida, de un programa a otro
- `>`: envia la salida a un archivo nuevo sobre escribiendo datos anteriores
- `>>`: envia la salida a un archivo existente concatenando los datos anteriores

#### less
- `Flechas` (arriba / abajo / izquierda / derecha) desplazarse
- `G` (mayuscula) Ir directamente al final del archivo
- `q` Salir del archivo

#### grep
- `-r` Busqueda recursiva (en todo el documento)
- `-v` Excluye los resultados que coincidan

#### tail
- `-f` Muestra las ultimas lineas, si el archivo origen cambia, se actualizara las ultimas lineas

#### Estructuras
- `less [archivo]`
- `more [archivo]`
- `grep [opciones] "[cadena_a_buscar]" [archivo]`
- `wc [archivo]`
- `gawk '{ [opciones] }' [archivo]`
- `cat [archivo_1] [archivo_1]`
- `tail [opcion] [archivo]`

##### Ejemplos:
- `# grep -r "25/Nov" * | wc`
- `# grep -r "25/Nov" * | head`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | wc`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | less`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | gawk '{ print $1 }'`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | wc | gawk '{ print $1 }'`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | grep "/js/" | wc`
- `# grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | grep -v "/js/" | wc`
- `# grep -r "25/Nov" * | gawk '{ print $1 }'`
- `# grep -r "25/Nov" * | gawk '{ print $1 }' | sort`
- `# grep -r "25/Nov" * | gawk '{ print $1 }' | sort | uniq`

> **Nota!** Todos estos comandos muestran los resultados por pantalla  
En caso de guardarlos en un archivo nuevo se usa el operador `>`

- `# grep -r "25/Nov" * | gawk '{ print $1 }' | sort | uniq > /tmp/25_nov`
- `# grep -r "26/Nov" * > /tmp/26_nov`
- `# cat /tmp/26_nov /tmp/26_nov > /tmp/all`

> **Nota!** El operador `>` crea un archivo nuevo, si el archivo existe borra anterior  
En caso de concatenar o añadir datos nuevos a un archivo, se usa el operador `>>``

- `# grep -r "27/Nov" * >> /tmp/all`

##### Practica con tail
Al acceder al la pagina del servidor automaticamente se registra una linea en el log,
el comando podra mostrarte siempre el ultimo registro almacenado en tiempo real
- Buscando procesos abiertos  
`ps aux`
- Buscando procesos abiertos (apache)  
`ps aux | grep "apache"`  
- Revisando el log de accesos a un servidor nginx  
`:/var/log/nginx# tail -f access.log`
