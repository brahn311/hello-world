### Funciones

#### ¿De dónde provienen las funciones?
Pueden venir de Python mismo. La función print es una de este tipo; dicha función es un valor agregado de Python junto con su entorno (está integrada); no tienes que hacer nada especial (por ejemplo, pedirle a alguien algo) si quieres usarla.

Pueden provenir de uno o varios de los módulos de Python llamados complementos; algunos de los módulos vienen con Python, otros pueden requerir una instalación por separado, cual sea el caso, todos deben estar conectados explícitamente con el código (te mostraremos cómo hacer esto pronto).

Puedes escribirlas tú mismo, colocando tantas funciones como desees y necesites dentro de su programa para hacerlo más simple, claro y elegante.
El nombre de la función debe ser significativo (el nombre de la función print es evidente), imprime en la terminal.

Si vas a utilizar alguna función ya existente, no podrás modificar su nombre, pero cuando comiences a escribir tus propias funciones, debes considerar cuidadosamente la elección de nombres.

Como se dijo anteriormente, una función puede tener:
- Un efecto.
- Un resultado.

También hay un tercer componente de la función, muy importante, el o los argumento(s).

Las funciones matemáticas usualmente toman un argumento, por ejemplo, sen (x) toma una x, que es la medida de un ángulo.

Las funciones de Python, por otro lado, son más versátiles. Dependiendo de las necesidades individuales, pueden aceptar cualquier número de argumentos, tantos como sea necesario para realizar sus tareas.

> **¡Nota!** algunas funciones de Python no necesitan ningún argumento.

```
print("¡Hola, Mundo!")
```

A pesar del número de argumentos necesarios o proporcionados, las funciones de Python demandan fuertemente la presencia de un par de paréntesis - el de apertura y de cierre, respectivamente.

Si deseas entregar uno o más argumentos a una función, colócalos dentro de los paréntesis. Si vas a utilizar una función que no tiene ningún argumento, aún tiene que tener los paréntesis.

> **¡Nota!** para distinguir las palabras comunes de los nombres de funciones, coloca un par de paréntesis vacíos después de sus nombres, incluso si la función correspondiente requiere uno o más argumentos. Esta es una medida estándar.

- La función de la que estamos hablando aquí es `print()`.
- ¿La función `print()` en nuestro ejemplo tiene algún argumento?
- Por supuesto que si, pero ¿Qué son los argumentos?

El nombre de la función (print en este caso) junto con los paréntesis y los argumentos, forman la invocación de la función.

### Como se invoca una funcion
¿Qué sucede cuando Python encuentra una invocación como la que está a continuación?
```
nombreFunción(argumento)
```

1. Python comprueba si el nombre especificado es legal (explora sus datos internos para encontrar una función existente del nombre; si esta búsqueda falla, Python cancela el código).

1. Python comprueba si los requisitos de la función para el número de argumentos le permiten invocar la función de esta manera (por ejemplo, si una función específica exige exactamente dos argumentos, cualquier invocación que entregue solo un argumento se considerará errónea y abortará la ejecución del código).

1. Python deja el código por un momento y salta dentro de la función que se desea invocar; por lo tanto, también toma los argumentos y los pasa a la función.

4. la función ejecuta el código, provoca el efecto deseado (si lo hubiera), evalúa el (los) resultado(s) deseado(s) y termina la tarea.
Finalmente, Python regresa al código (al lugar inmediatamente después de la invocación) y reanuda su ejecución.
