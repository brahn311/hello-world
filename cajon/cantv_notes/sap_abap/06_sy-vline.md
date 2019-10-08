# SY-VLINE
Divide la linea y formatea como tabla para separar por columnas

```
REPORT Z_SY_VLINE.

DATA i TYPE I VALUE 0.

* Titulo de las columnas (no mantiene anchos con el restante)
WRITE: / 'Column 1' , SY-VLINE,
         'Column 2' , SY-VLINE,
         i.

* Repitiendo (ilustra el mostrar datos de tablas)
WHILE i < 8.
  WRITE: / 'Name    ' , SY-VLINE,
           'Lastname' , SY-VLINE,
           i.
  i = i + 1.
ENDWHILE.
```
