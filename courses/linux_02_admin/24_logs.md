# Uso de redireccionamiento y pipes para logs
Una de las tareas de un administrador de linux es leer logs
- Muchas veces dispondremos de herramientas para centralizar logs
- En otras instancias tendremos que acceder desde los servidores 

Lo Interesante disponer de herramientas adecuadas para la tarea
- Filtrar la informacion, ataques, contenido
- Conocer la  IP afectada o identificar el origen de los ataques o contenido

#### Aplicaciones
- less: permite ver de forma completa un archivo
- more: muestra el contenido del archivo de manera secuencial
- grep: busca contenido en un archivo
(presionando teclas)

#### less
- Flechas (arriba / abajo / izquierda / derecha) desplazarse
- G (mayuscula) Ir directamente al final del archivo
- q Salir del archivo

#### grep
- -r Busqueda recursiva (en todo el documento) 
- -v Excluye los resultados que coincidan 
- | (Pipe) Permite enviar datos de salida, de un programa a otro 
- head Muestra las primeras 10 lineas

Por ejemplo:
- # grep -r "25/Nov" * | wc 
- # grep -r "25/Nov" * | head 
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | wc
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | less
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | gawk '{ print $1 }'
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | wc | gawk '{ print $1 }'
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | grep "/js/" | wc
- # grep -r "25/Nov" * | grep "2404+e800+e60c+2be+3ca5+b69b+e5a0+145c" | grep -v "/js/" | wc
- # grep -r "25/Nov" * | gawk '{ print $1 }'
- # grep -r "25/Nov" * | gawk '{ print $1 }' | sort
- # grep -r "25/Nov" * | gawk '{ print $1 }' | sort | uniq

> **Nota!** todos estos comandos muestran los resultados por pantalla  
En caso de guardarlos a un archivo agrega: >

- # grep -r "25/Nov" * | gawk '{ print $1 }' | sort | uniq > /tmp/25_nov
- # grep -r "26/Nov" * > /tmp/26_nov

Unir 2 archivos
> ver minuto 9:18

