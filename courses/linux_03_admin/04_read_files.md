# Diferencias entre LESS, CAT, HEAD y TAIL para lectura de archivos

- cat:  
Originalmente permite concatenar archivos  
Tambien nos permite leer archivos en su totalidad (no recomendado para archivo grandes)
- less:  
Nos ayuda a leer el contenido de nuestros archivos por páginas  
Es usado cuando usamos el comando `$ man [comando]` (muestra el manual de comandos instalados)
El programa usa un promt `:` para indicar que esta esperando instrucciones (para que usemos el teclado)
   - Nos movemos con las flechas del teclado o la tecla de espacio
   - Buscamos palabras específicas escribiendo `/` + [palabra]
   - Salimos de la lectura del archivo con la letra `q`
- tail:
`tail [opcion] [archivo] [archivo]`  
Nos muestra las últimas 10 líneas de nuestros archivos
   - `-f` actualiza la pantalla en tiempo real mientras el archivo crece
   - `-n` modifica el numero de lineas mostradas
   - Puedes espeficicar varios archivos y divide la pantalla
- head:
Nos muestra las primeras 10 líneas de nuestros archivos
   - `-n` modifica el numero de lineas mostradas

> **Nota!** `/var/log/auth.log` Muestra el log de las autenticaciones