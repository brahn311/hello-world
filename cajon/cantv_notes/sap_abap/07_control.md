# Check, If else, Case
Estructuras de control, operadores de condiciones

#### CHECK
Se utiliza para saber si una condicion es verdadera

```
REPORT Z_CHECK.

CHECK SY-SUBRC EQ 0.
   WRITE: 'Okay'.

```

```
REPORT Z_CHECK.

DATA myvar TYPE I.
myvar = 12.

CHECK myvar EQ 12.
   WRITE: 'myvar = ' , myvar.

```
> **Nota!** Al parecer el `WRITE` se ejecuta solo si es verdadero  
- Solo aplica para una linea? ()

#### IF, ELSEIF, ELSE
Compara un valor y si cumple una condicion ejecuta un codigo

```
REPORT Z_IF_ELSE.

DATA i TYPE I VALUE 0.

IF i = 0.
   WRITE: 'i = 0'.
   ELSEIF i = 1.
      WRITE: 'i = 1'.
   ELSE 'i = ' , i.
ENDIF.
```

#### CASE

```
REPORT Z_CASE.

DATA: entero TYPE I VALUE 1.

CASE entero.
   WHEN 1.
      WRITE: 'Es 1'.
   WHEN 2.
      WRITE: 'Es 2'.
ENDCASE.
```
> **Nota!** Investigar donde colocar el default

#### Operadores logicos

|Operador|Operador|Descripcion|
|:-:|:-:|-|
|=|EQ|Es igual|
|>|GT|Mayor que|
|<|LT|Menor que|
|>=|GE|Mayor o igual que|
|<=|LE|Menor o igual que|
|<>|NE|Diferente|
|BETWEEN _var1_ AND _var2_||Entre|
|IS INITIAL||Contenido ha cambiado|
|IS NOT INITIAL||Contenido no a cambiado|

> **Nota!** Operadores _ABAP_ suelen usar mas los operadores en letras

#### BETWEEN
```
REPORT Z_CASE.

DATA: entero TYPE I VALUE 1.

IF entero BETWEEN 0 AND 9.
   WRITE 'El valor esta entre 0 y 9'.
ENDIF.
```
> **Nota!** En la clase 14 _debugging_ puedes acceder a ejemplos de operaciones
