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
   WRITE 'myvar = 12'.

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


```
> Minuto: 7:35

#### Operadores logicos

|Operador|Operador|Descripcion|
|:-:|:-:|-|
|=|EQ|Es igual|
|>|GT|Mayor que|
|<|LT|Menor que|
|>=|GE|Mayor o igual que|
|<=|LE|Menor o igual que|
|<>|NE|Diferente|
|BETWEEN v1 and v2||Entre|
|IS INITIAL||Contenido ha cambiado|
|IS NOT INITIAL||Contenido no a cambiado|

> **Nota!** Operadores _ABAP_ suelen usar mas los operadores en letras
