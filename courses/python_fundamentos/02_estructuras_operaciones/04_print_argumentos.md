### La función print() utilizando argumentos múltiples
También vale la pena intentar alimentar la función `print()` con más de un argumento.

Mira la ventana del editor. Esto es lo que vamos a probar ahora:
```
print("Witsi witsi araña" , "subió" , "su telaraña.")
```
Hay una invocación de la función `print()` pero contiene tres argumentos. Todos ellos son cadenas.

Los argumentos están separados por `,` comas. Se han rodeado de espacios para hacerlos más visibles, pero no es realmente necesario y no se hará más.

Las comas que separan los argumentos desempeñan un papel completamente diferente a la coma dentro de la cadena. El primero es una parte de la sintaxis de Python, el segundo está destinado a mostrarse en la consola.

Si vuelves a mirar el código, verás que no hay espacios entre las cadenas.

La consola ahora debería mostrar el siguiente texto:
```
La Witsi witsi araña subió su telaraña.
```
Los espacios, removidos de las cadenas, han vuelto a aparecer.

Dos conclusiones surgen de este ejemplo:
- Una función `print()` invocada con más de un argumento genera la salida en una sola línea.
- La función `print()` pone un espacio entre los argumentos emitidos por iniciativa propia.

La forma en que pasamos los argumentos a la función `print()` es la más común en Python, y se denomina manera posicional (este nombre proviene del hecho de que el significado del argumento está dictado por su posición, por ejemplo, el segundo argumento se emitirá después del primero, y no al revés).

### Argumentos de palabras Claves
Python ofrece otro mecanismo para transmitir o pasar los argumentos, que puede ser útil cuando se desea convencer a la función `print()` de que cambie su comportamiento un poco.

No se va a explicar en profundidad ahora. Se planea hacer esto cuando se trate el tema de funciones. Por ahora, simplemente queremos mostrarte como funciona. Siéntete libre de utilizarlo en tus propios programas.

El mecanismo se llama argumentos de palabras clave. El nombre se deriva del hecho de que el significado de estos argumentos no se toma de su ubicación (posición) sino de la palabra especial (palabra clave) utilizada para identificarlos.

La función `print()` tiene dos argumentos de palabras clave que se pueden utilizar para estos propósitos. El primero de ellos se llama end.

#### Argumento de palabra clave: end
En la ventana del editor se puede ver un ejemplo muy simple de como utilizar un argumento de palabra clave.

Para utilizarlo es necesario conocer algunas reglas:

Un argumento de palabra clave consta de tres elementos:
1. Una palabra clave que identifica el argumento (en este ejemplo `end`)
1. Un signo de igual `=`
1. Un valor asignado a ese argumento.

Cualquier argumento de palabra clave debe ponerse después del último argumento posicional (esto es muy importante).

- **end=" "**  
Hemos utilizado el argumento de palabra clave end y lo hemos igualado a una cadena que contiene un espacio.  
```
print("Mi nombre es", "Python.", end=" ")
print("Monty Python.")
```
La consola ahora debería mostrar el siguiente texto:
```
Mi nombre es Python. Monty Python.
```
Como puedes ver, el argumento de palabra clave end determina los caracteres que la función `print()` envía a la salida una vez que llega al final de sus argumentos posicionales.  
El comportamiento predeterminado refleja que el argumento de la palabra clave end de manera predeterminada es: `end="\n".`

- **end=""**  
Si observas detenidamente, verás que hemos utilizado el argumento end , pero su cadena asignada está vacía (no contiene ningún carácter).
```
print("Mi nombre es ", end="")
print("Monty Python.")
```
Ya que al argumento end se le ha asignado a nada, la función `print()` tampoco genera nada, una vez que se hayan agotado los argumentos posicionales.  
La consola ahora debería mostrar el siguiente texto:
```
Mi nombre es Monty Python.
```
No se han enviado nuevas líneas a la salida.

#### Argumentos de palabras clave: sep
Se estableció anteriormente que la función `print()` separa los argumentos generados con espacios. Este comportamiento también puede ser cambiado.

El argumento de palabra clave que puede hacer esto se denomina sep (como separador).

Mira el código en el editor y ejecútalo.
```
print("Mi", "nombre", "es", "Monty", "Python.", sep="-")
```
El argumento sep entrega el siguiente resultado:
```
Mi-nombre-es-Monty-Python.
```

La función `print()` ahora utiliza un guión, en lugar de un espacio, para separar los argumentos generados.

El valor del argumento sep también puede ser una cadena vacía.

Ambos parametros pueden ser combinados
```
print("Fundamentos","Programación","en", sep="***", end="..." )
print("Python")
```
