### Compilación vs. Interpretación
La programación de computadora es el acto de establecer una secuencia de instrucciones con la cual se causará el efecto deseado. El efecto podría ser diferente en cada caso específico: depende de la imaginación, el conocimiento y la experiencia del programador.

Por supuesto, tal composición tiene que ser correcta en muchos sentidos, tales como:

- **Alfabéticamente**: Un programa debe escribirse en una secuencia de comandos reconocible, por ejemplo, el Romano, Cirílico, etc.
- **Léxicamente**: Cada lenguaje de programación tiene su diccionario y necesitas dominarlo; afortunadamente, es mucho más simple y más pequeño que el diccionario de cualquier lenguaje natural.
- **Sintácticamente**: Cada idioma tiene sus reglas y deben ser obedecidas.
- **Semánticamente**: El programa tiene que tener sentido.

Desafortunadamente, un programador también puede cometer errores en cada uno de los cuatro sentidos anteriores. Cada uno de ellos puede hacer que el programa se vuelva completamente inútil.

Supongamos que ha escrito correctamente un programa. ¿Cómo persuadimos a la computadora para que la ejecute? Tienes que convertir tu programa en lenguaje máquina. Afortunadamente, la traducción puede ser realizada por una computadora, haciendo que todo el proceso sea rápido y eficiente.

Hay dos formas diferentes de **transformar un programa** de un _lenguaje de programación de alto nivel_ a un _lenguaje de máquina_:

- **COMPILACIÓN**  
El programa fuente se traduce una vez (sin embargo, esta ley debe repetirse cada vez que se modifique el código fuente) obteniendo un archivo (por ejemplo, un archivo .exe si el código está diseñado para ejecutarse en MS Windows) que contiene el código de la máquina; ahora puedes distribuir el archivo en todo el mundo; el programa que realiza esta traducción se llama compilador o traductor.

- **INTERPRETACIÓN**  
Tú (o cualquier usuario del código) puedes traducir el programa fuente cada vez que se ejecute; el programa que realiza este tipo de transformación se denomina intérprete, ya que interpreta el código cada vez que está destinado a ejecutarse; también significa que no puede distribuir el código fuente tal como está, porque el usuario final también necesita que el intérprete lo ejecute.

Debido a algunas razones muy fundamentales, un lenguaje de programación de alto nivel particular está diseñado para caer en una de estas dos categorías.

Hay muy pocos idiomas que se pueden compilar e interpretar. Por lo general, un lenguaje de programación se proyecta con este factor en la mente de sus constructores: ¿Se compilará o interpretará?

### ¿Qué hace realmente el intérprete?
Supongamos una vez más que has escrito un programa. Ahora, existe como un archivo de computadora: un programa de computadora es en realidad una pieza de texto, por lo que el código fuente generalmente se coloca en archivos de texto. Nota: debe ser texto puro, sin ninguna decoración, como diferentes fuentes, colores, imágenes incrustadas u otros medios. Ahora tienes que invocar al intérprete y dejar que lea el archivo fuente.

El intérprete lee el código fuente de una manera que es común en la cultura occidental: _de arriba hacía abajo y de izquierda a derecha_. **Hay algunas excepciones** que se cubrirán más adelante en el curso.

En primer lugar, el intérprete verifica si todas las líneas subsiguientes son correctas (utilizando los cuatro aspectos tratados anteriormente).

Si el compilador encuentra un error, termina su trabajo inmediatamente. El único resultado en este caso es un mensaje de error. El intérprete le informará dónde se encuentra el error y qué lo causó. Sin embargo, estos mensajes pueden ser engañosos, ya que el intérprete no puede seguir tus intenciones exactas y puede detectar errores a cierta distancia de tus causas reales.

Por ejemplo, si intentas usar una entidad de un nombre desconocido, causará un error, pero el error se descubrirá en el lugar donde se intenta usar la entidad, no donde se introdujo el nombre de la nueva entidad.

En otras palabras, la razón real generalmente se ubica un poco antes en el código, por ejemplo, en el lugar donde se tuvo que informar al intérprete de que usaría la entidad del nombre.

Si la línea se ve bien, el intérprete intenta ejecutarla (nota: cada línea generalmente se ejecuta por separado, por lo que la **"Lectura - Verificación - Ejecución"**, pueden repetirse muchas veces, más veces que el número real de líneas en el archivo fuente, como algunas partes del código pueden ejecutarse más de una vez).

También es posible que una parte significativa del código se ejecute con éxito antes de que el intérprete encuentre un error. Este es el comportamiento normal en este modelo de ejecución.

Puedes preguntar ahora: _¿Cuál es mejor? ¿El modelo de "compilación" o el modelo de "interpretación"? No hay una respuesta obvia._ Si hubiera habido, uno de estos modelos habría dejado de existir hace mucho tiempo. Ambos tienen sus ventajas y sus desventajas.

##### VENTAJAS

|COMPILACIÓN|INTERPRETACIÓN|
|-|-|
La ejecución del código traducido suele ser más rápida.|Puede ejecutar el código en cuanto lo complete; no hay fases adicionales de traducción.
Solo el usuario debe tener el compilador; el usuario final puede usar el código sin él.|El código se almacena utilizando el lenguaje de programación, no el de la máquina; esto significa que puede ejecutarse en computadoras que utilizan diferentes lenguajes máquina; no compila el código por separado para cada arquitectura diferente.
El código traducido se almacena en lenguaje máquina, ya que es muy difícil de entender, es probable que tus propios inventos y trucos de programación sigan siendo secreto.|

##### DESVENTAJAS

|COMPILACIÓN|INTERPRETACIÓN|
|-|-|
|La compilación en sí misma puede llevar mucho tiempo; es posible que no puedas ejecutar tu código inmediatamente después de cualquier modificación.|No esperes que la interpretación incremente tu código a alta velocidad: tu código compartirá la potencia de la computadora con el intérprete, por lo que no puede ser realmente rápido.
|Tienes que tener tantos compiladores como plataformas de hardware en los que deseas que se ejecute su código.|Tanto tú como el usuario final deben tener el intérprete para ejecutar su código.

#### ¿Qué significa todo esto para ti?

**Python** es un _lenguaje interpretado_. Esto significa que hereda todas las ventajas y desventajas descritas. Por supuesto, agrega algunas de sus características únicas a ambos conjuntos.

Si deseas programar en Python, necesitarás el intérprete de Python. No podrás ejecutar tu código sin él. Afortunadamente, Python es gratis. Esta es una de sus ventajas más importantes.

Debido a razones históricas, los lenguajes diseñados para ser utilizados en la manera de interpretación a menudo se llaman _lenguajes de programación_, mientras que los programas fuente codificados que los usan se llaman _scripts_.
