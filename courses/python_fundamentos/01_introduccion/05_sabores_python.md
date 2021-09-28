### Hay más de un Python
Hay dos tipos principales de Python, llamados `Python 2` y `Python 3`.

**Python 2** es una versión _anterior del Python original_. Su desarrollo se ha estancado intencionalmente, aunque eso no significa que no haya actualizaciones. Por el contrario, las actualizaciones se emiten de forma regular, pero no pretenden modificar el idioma de manera significativa. Prefieren arreglar cualquier error recién descubierto y agujeros de seguridad. La ruta de desarrollo de Python 2 ya ha llegado a un callejón sin salida, pero Python 2 en sí todavía está muy vivo.

**Python 3** es la versión más nueva (para ser precisos, la actual) del lenguaje. Está atravesando su propio camino de evolución, creando sus propios estándares y hábitos.

El primero es más tradicional, más conservador que Python, y se parece a algunos de los buenos lenguajes antiguos derivados del lenguaje de programación C clásico.

**Estas dos versiones de Python no son compatibles entre sí**. Las secuencias de comandos de `Python 2` no se ejecutarán en un entorno de Python 3 y viceversa, por lo que si deseas que un intérprete de Python 3 ejecute el código `Python 2` anterior, la única solución posible es volver a escribirlo, no desde cero, por supuesto. Como grandes partes del código pueden permanecer intactas, pero tienes que revisar todo el código para encontrar todas las incompatibilidades posibles. Desafortunadamente, este proceso no puede ser completamente automatizado.

Es demasiado difícil, consume mucho tiempo, es demasiado caro y es demasiado arriesgado migrar una aplicación `Python 2` antigua a una nueva plataforma. Es posible que reescribir el código le introduzca nuevos errores. Es más fácil y mas sensato dejar estos sistemas solos y mejorar el intérprete existente, en lugar de intentar trabajar dentro del código fuente que ya funciona.

`Python 3` **no es solo una versión mejorada** de `Python 2`, es un lenguaje **_completamente diferente_**, aunque es muy similar a su predecesor. Cuando se miran a distancia, parecen ser los mismos, pero cuando se observan de cerca, se notan muchas diferencias.

Si estás modificando una solución Python existente, entonces es muy probable que esté codificada en `Python 2`. Esta es la razón por la que `Python 2` todavía está en uso. Hay demasiadas aplicaciones de `Python 2` existentes para descartarlo por completo.

> **Nota!**
- Si se va a comenzar un nuevo proyecto de Python, deberías usar Python 3, esta es la versión de Python que se usará durante este curso.
- Es importante recordar que puede haber diferencias mayores o menores entre las siguientes versiones de Python 3 (p. Ej., `Python 3.6` introdujo claves de diccionario ordenadas de forma predeterminada en la implementación de CPython). La buena noticia es que **todas las versiones más nuevas de Python 3 son compatibles con las versiones anteriores de Python 3**. Siempre que sea significativo e importante, siempre intentaremos resaltar esas diferencias en el curso.
- Todos los ejemplos de código que encontrarás durante el curso se han probado con `Python 3.4`, `Python 3.6` y `Python 3.7`.

### Python alias CPython
Además de Python 2 y Python 3, hay más de una versión de cada uno.

En primer lugar, están los **Pythons** que mantienen las personas reunidas en torno a **PSF** [(Python Software Foundation)](https://www.python.org/psf-landing/), una comunidad que tiene como objetivo desarrollar, mejorar, expandir y popularizar Python y su entorno. El presidente del PSF es el propio _Guido van Rossum_, y por esta razón, estos Pythons se llaman **canónicos**. También se consideran **Pythons de referencia**, ya que cualquier otra implementación del lenguaje debe seguir todos los estándares establecidos por el PSF.

Guido van Rossum utilizó el lenguaje de programación "C" para implementar la primera versión de su lenguaje y esta decisión aún está vigente. **Todos los Pythons que vienen del PSF están escritos en el lenguaje "C"**. Hay muchas razones para este enfoque y tiene muchas consecuencias. Una de ellos (probablemente la más importante) es que gracias a él, Python puede ser portado y migrado fácilmente a todas las plataformas con la capacidad de compilar y ejecutar programas en lenguaje "C" (virtualmente todas las plataformas tienen esta característica, lo que abre muchas expansiones y oportunidades para Python).

Esta es la razón por la que la implementación de PSF a menudo se denomina **CPython**. Este es el Python más influyente entre todos los Pythons del mundo.

### Cython
Otro miembro de la familia Python es Cython.

Cython es una de las posibles soluciones al rasgo de Python más doloroso: la falta de eficiencia. Los cálculos matemáticos grandes y complejos pueden ser fácilmente codificados en Python (mucho más fácil que en "C" o en cualquier otro lenguaje tradicional), pero la ejecución del código resultante puede requerir mucho tiempo.

¿Cómo se reconcilian estas dos contradicciones? Una solución es escribir tus ideas matemáticas usando Python, y cuando estés absolutamente seguro de que tu código es correcto y produce resultados válidos, **puedes traducirlo a "C"**. Ciertamente, "C" se ejecutará mucho más rápido que Python puro.

Esto es lo que pretende hacer Cython: **traducir automáticamente el código de Python** (limpio y claro, pero no demasiado rápido) **al código "C"** (complicado y hablador, pero ágil).

### Jython
Otra versión de Python se llama **Jython**. "J" es para "Java". Imagina un Python escrito en Java en lugar de C. Esto es útil, por ejemplo, si desarrollas sistemas grandes y complejos escritos completamente en Java y deseas agregarles cierta flexibilidad de Python. El tradicional CPython puede ser difícil de integrar en un entorno de este tipo, ya que C y Java viven en mundos completamente diferentes y no comparten muchas ideas comunes.

Jython puede comunicarse con la infraestructura Java existente de manera más efectiva. Es por esto que algunos proyectos lo encuentran útil y necesario.

> **Nota!** la implementación actual de Jython sigue los estándares de Python 2. Hasta ahora, no hay Jython conforme a Python 3.

### PyPy y RPython
Echa un vistazo al logo de **PyPy**, Es un rebus, representa un entorno de Python escrito en un lenguaje similar a Python llamado **RPython** (Restricted Python). En realidad es un subconjunto de Python. El código fuente de PyPy no se ejecuta de manera interpretativa, sino que se traduce al lenguaje de programación C y luego se ejecuta por separado.

Esto es útil porque si deseas probar cualquier característica nueva que pueda ser o no introducida en la implementación de Python, es más fácil verificarla con PyPy que con CPython. Esta es la razón por la que PyPy es más una herramienta para las personas que desarrollan Python que para el resto de los usuarios.

Esto no hace que PyPy sea menos importante o menos serio que CPython.

Además, PyPy es compatible con el lenguaje Python 3.

Hay muchos más Pythons diferentes en el mundo. Los encontrarás sí los buscas, pero este curso se centrará en CPython.
