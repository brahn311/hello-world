### Comenzando tu trabajo con Python
Ahora que tienes Python 3 instalado, es hora de verificar si funciona y de hacer el primer uso.

Este será un procedimiento muy simple, pero debería ser suficiente para convencerte de que el entorno de Python es completo y funcional.

Hay muchas formas de utilizar Python, especialmente si vas a ser un desarrollador de Python.

Para comenzar tu trabajo, necesitas las siguientes herramientas:

- Un editor que te ayudará a escribir el código (debes tener algunas características especiales, no disponibles en herramientas simples); este editor dedicado te dará más que el equipo estándar del sistema operativo.
- Una consola en la que puedes iniciar tu código recién escrito y detenerlo por la fuerza cuando se sale de control.
- Una herramienta llamada depurador, capaz de ejecutar tu código paso a paso y te permite inspeccionarlo en cada momento de su ejecución.

Además de sus muchos componentes útiles, la instalación estándar de Python 3 contiene una aplicación muy simple pero extremadamente útil llamada **IDLE**.

**IDLE** es un acrónimo de: **Integrated Development and Learning Environment** (Desarrollo Integrado y Entorno de Aprendizaje).

Navega por los menús de tu sistema operativo, encuentra **IDLE** en algún lugar debajo de Python 3.x y ejecútalo.

### ¿Cómo escribir y ejecutar tu primer programa?
Ahora es el momento de escribir y ejecutar tu primer programa en Python 3. Por ahora, será muy simple.

Crear un nuevo archivo fuente y llenarlo con el código. Haz clic en `File` en el menú del IDLE y elige `New File`. Como puedes ver, IDLE abre una nueva ventana para ti. Puedes usarla para escribir y modificar tu código.  

Esa es la ventana del editor. Su único propósito es ser un lugar de trabajo en el que se trate tu código fuente. No confundas la ventana del editor con la ventana de shell. Realizan diferentes funciones.

La ventana del editor actualmente no tiene título, pero es una buena práctica comenzar a trabajar nombrando el archivo de origen.

Haz clic en `File` (en la nueva ventana), luego haz clic en `Save as...`, selecciona una carpeta para el nuevo archivo (el escritorio es un buen lugar para tus primeros intentos de programación) y elige un nombre para el nuevo archivo.

> **Nota!** no establezcas ninguna extensión para el nombre de archivo que vas a utilizar. Python necesita que sus archivos tengan la extensión .py , por lo que debes confiar en los valores predeterminados de la ventana de diálogo. El uso de la extensión .py estándar permite que el sistema operativo abra estos archivos correctamente.

### ¿Cómo escribir y ejecutar tu primer programa?
Ahora pon solo una línea en tu ventana de editor recién abierta y con nombre.

La línea se ve así:
```
print("Hisssssss...")
```

Puedes utilizar el portapapeles para copiar el texto en el archivo.

No vamos a explicar el significado del programa en este momento. Encontrarás una discusión detallada en el siguiente capítulo.

Echa un vistazo más de cerca a las comillas. Estas son la forma más simple de comillas (neutral, recta, etc.) que se usan comúnmente en los archivos de origen. No intentes utilizar citas tipográficas (curvadas, rizadas, etc.), utilizadas por los procesadores de texto avanzados, ya que Python no las acepta.

Si todo va bien y no hay errores en el código, puedes usar `Run` en el menu del editor, luego a `Run Module F5` y la ventana de la consola mostrará los efectos causados por la ejecución del programa.

En este caso, el programa se ejecutara de manera correcta.

Intenta ejecutarlo una vez más. Y una vez más.

Ahora cierra ambas ventanas ahora y vuelve al escritorio.

### Error de sintaxis
Ahora ejecuta IDLE otra vez.

Haz clic en `File`, `Open`, señala el archivo que guardaste anteriormente y deja que IDLE lo lea.

Intenta ejecutarlo de nuevo presionando `F5` cuando la ventana del editor está activa.

Como puedes ver, IDLE puede guardar tu código y recuperarlo cuando lo necesites de nuevo.

IDLE contiene una característica adicional y útil.

Primero, quita el paréntesis de cierre.

Luego ingresa el paréntesis nuevamente.

Cada vez que coloques el paréntesis de cierre en tu programa, IDLE mostrará la parte del texto limitada con un par de paréntesis correspondientes. Esto te ayuda a recordar colocarlos en pares.

Retira nuevamente el paréntesis de cierre. El código se vuelve erróneo. Ahora contiene un error de sintaxis. IDLE no debería dejar que lo ejecutes. Muestra una pequeña ventana con cuadro mostrando la advertencia del error.

Intenta ejecutar el programa de nuevo. IDLE te recordará que guardes el archivo modificado. Sigue las instrucciones.

### Error de ejecución
Es posible que hayas notado que el mensaje de error generado para el error anterior es bastante diferente del primero.

Esto se debe a que la naturaleza del error es diferente y el error se descubre en una etapa diferente de la interpretación.

La ventana del editor no proporcionará ninguna información útil sobre el error, pero es posible que las ventanas de la consola si.

El mensaje (en rojo) muestra (en las siguientes líneas):

- El rastreo (que es la ruta que el código atraviesa a través de diferentes partes del programa, puedes ignorarlo por ahora, ya que está vacío en un código tan simple).
- La ubicación del error (el nombre del archivo que contiene el error, el número de línea y el nombre del módulo); nota: el número puede ser engañoso, ya que Python generalmente muestra el lugar donde se da cuenta por primera vez de los efectos del error, no necesariamente del error en sí.
- El contenido de la línea errónea: nota: la ventana del editor de IDLE no muestra números de línea, pero muestra la ubicación actual del cursor en la esquina inferior derecha; utilízalo para ubicar la línea errónea en un código fuente largo.
- El nombre del error y una breve explicación.

Experimenta creando nuevos archivos y ejecutando tu código. Intenta enviar un mensaje diferente a la pantalla, por ejemplo: ¡rawr!, miau, o incluso tal vez un ¡oink! Intenta estropear y arreglar tu código, observa que sucede.
