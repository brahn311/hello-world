#### La función print()
La palabra print que puedes ver aquí es el nombre de una función. Eso no significa que dondequiera que aparezca esta palabra, será siempre el nombre de una función. El significado de la palabra proviene del contexto en el cual se haya utilizado la palabra.

Probablemente hayas encontrado el término función muchas veces antes, durante las clases de matemáticas. Probablemente también puedes recordar varios nombres de funciones matemáticas, como seno o logaritmo.

Las funciones de Python, sin embargo, son más flexibles y pueden contener más contenido que sus parientes matemáticos.

Una función (en este contexto) es una parte separada del código de computadora el cual es capaz de:

Causar algún efecto (por ejemplo, enviar texto a la terminal, crear un archivo, dibujar una imagen, reproducir un sonido, etc.); esto es algo completamente inaudito en el mundo de las matemáticas.
Evaluar un valor o algunos valores (por ejemplo, la raíz cuadrada de un valor o la longitud de un texto dado); esto es lo que hace que las funciones de Python sean parientes de los conceptos matemáticos.
Además, muchas de las funciones de Python pueden hacer las dos cosas anteriores juntas.

### La función print()
Tres preguntas importantes deben ser respondidas antes de continuar:

1. **¿Cuál es el efecto que causa la función print() ?**  
El efecto es muy útil y espectacular. La función toma los argumentos (puede aceptar más de un argumento y también puede aceptar menos de un argumento) los convierte en un formato legible para el ser humano si es necesario (como puedes sospechar, las cadenas no requieren esta acción, ya que la cadena ya está legible) y envía los datos resultantes al dispositivo de salida (generalmente la consola); en otras palabras, cualquier cosa que se ponga en la función de `print()` aparecerá en la pantalla.  
No es de extrañar entonces, que de ahora en adelante, utilizarás `print()` muy intensamente para ver los resultados de tus operaciones y evaluaciones.

1. **¿Qué argumentos espera print() ?**  
Cualquiera. Te mostraremos pronto que `print()` puede operar con prácticamente todos los tipos de datos ofrecidos por Python. Cadenas, números, caracteres, valores lógicos, objetos: cualquiera de estos se puede pasar con éxito a `print().`

1. **¿Qué valor evalúa la función print() ?**  
Ninguno. Su efecto es suficiente - `print()` no evalúa nada.

### La función print() - Instrucciones
La invocación de una función es uno de los posibles tipos de instrucciones de Python.

Por supuesto, cualquier programa complejo generalmente contiene muchas más instrucciones. La pregunta es, ¿Cómo se acopla más de una instrucción en el código de Python?

La sintaxis de Python es bastante específica en esta área. A diferencia de la mayoría de los lenguajes de programación, **Python requiere que no haya más de una instrucción por una línea**.

Una línea puede estar vacía (por ejemplo, puede no contener ninguna instrucción) pero no debe contener dos, tres o más instrucciones. **Esto está estrictamente prohibido**.

> **¡Nota!** Python hace una excepción a esta regla: permite que una instrucción se extienda por más de una línea (lo que puede ser útil cuando el código contiene construcciones complejas).

Vamos a expandir el código un poco, puedes verlo en el editor. Ejecutalo y nota lo que ves en la consola.
```
print("La Witsi Witsi Araña subió a su telaraña.")
print("Vino la lluvia y se la llevó.")
```
Tu consola Python ahora debería verse así:
```
La Witsi Witsi Araña subió a su telaraña.
Vino la lluvia y se la llevó.
```

**Observaciones:**
1. El programa invoca la función `print()` dos veces, como puedes ver hay dos líneas separadas en la consola: esto significa que `print()` comienza su salida desde una nueva línea cada vez que comienza su ejecución. Puedes cambiar este comportamiento, pero también puedes usarlo a tu favor.
1. Cada invocación de `print()` contiene una cadena diferente, como su argumento y el contenido de la consola lo reflejan, **esto significa que las instrucciones en el código se ejecutan en el mismo orden en que se colocaron en el archivo de origen**; no se ejecuta la siguiente instrucción hasta que se complete la anterior (hay algunas excepciones a esta regla, pero puedes ignorarlas por ahora).

Cambiando un poco el ejemplo:
```
print("La Witsi Witsi Araña subió a su telaraña.")
print()
print("Vino la lluvia y se la llevó.")
```
hemos agregado una invocación vacía de la función `print().` La llamamos vacía porque no hemos agregado ningún argumento a la función.
```
La Witsi Witsi Araña subió a su telaraña.

Vino la lluvia y se la llevó.
```

Como puedes ver, la invocación de `print()` genera una línea vacía (esta interpretación también es correcta) su salida es solo una nueva línea.
> **¡Nota!** Esta no es la única forma de producir una nueva linea en la consola de salida.

#### los caracteres de escape y nueva línea
Hemos modificado el código de nuevo. Obsérvalo con cuidado:
```
print("La Witsi Witsi Araña\nsubió a su telaraña.\n")
print()    
print("Vino la lluvia\ny se la llevó.")
```

Hay dos cambios muy sutiles:
- Hemos insertado un par extraño de caracteres dentro del texto. Se ven así: `\n`.

Curiosamente, mientras tu ves dos caracteres, Python ve solo uno.

La barra invertida `\` tiene un significado muy especial cuando se usa dentro de las cadenas, es llamado el carácter de escape. Significa que la serie de caracteres en la cadena se escapa (detiene) por un momento (un momento muy corto) para introducir una inclusión especial.

En otras palabras, la barra invertida no significa nada, sino que es solo un tipo de anuncio, de que el siguiente carácter después de la barra invertida también tiene un significado diferente.

- La letra n colocada después de la barra invertida proviene de la palabra newline (nueva linea). Forman un símbolo especial denominado carácter de nueva línea (newline character), que incita a la consola a iniciar una nueva línea de salida.

Ejecuta el código. La consola ahora debería verse así:
```
La Witsi Witsi Araña
subió a su telaraña.


Vino la lluvia
y se la llevó.
```

Como se puede observar, aparecen nuevas líneas en la canción infantil, en los lugares donde se ha utilizado `\n`.

El utilizar la diagonal invertida tiene dos características importantes:

1. Si deseas colocar solo una barra invertida dentro de una cadena, no olvides su naturaleza de escape: tienes que duplicarla, por ejemplo, la siguiente invocación causará un error:
```
print("\")
```
Mientras que esta no lo hará:
```
print("\\")
```
1. No todos los pares de escape (la barra invertida junto con otro carácter) significan algo.
