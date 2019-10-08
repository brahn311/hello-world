#  DO, WHILE
Ciclos de repeticion

#### DO
Ejecutar una instrucción mientras esta cumple una condición

A veces se combina con un `EXIT` para
salir del bucle si determinada condición se cumple

```
REPORT Z_DO.

DATA: entero TYPE I VALUE 1.

DO 10 TIMES.
   entero = entero + 1.
   WRITE: / 'El numero es ' , entero.
ENDDO.
```

```
REPORT Z_DO_EXIT.

DATA: entero TYPE I VALUE 0.

DO 10 TIMES.
   entero = entero + 1.
   IF entero = 7.
     EXIT.
   ENDIF

   WRITE: / 'El numero es ' , entero.
   SKIP.
ENDDO.
```

#### WHILE
```
REPORT Z_WHILE.

DATA: entero TYPE I VALUE 0.

WHILE entero < 10
   WRITE: / 'El numero es ' , entero.
   entero = entero + 1.
   SKIP.
ENDWHILE.
```

> **Nota!** Comentar grupo de lineas seleccionadas `Ctrl`+`>`+`=` _(Verificar)_
