# Trabajo con cadenas

- CONCATENATE
Es utilizado para unir/concatenar campos alfanumérico.
Un ejemplo es si queremos unir las variables var01, var02 en la variable var

- CONDENSE
Elimina todos los espacios en blanco en una cadena incluyendo los espacios a la izquierda

- REPLACE
Se utiliza para remplazar una parte de la cadena por otra

- SEARCH
busca una cadena dentro de otra cadena.
si la función encuentra el valor devolverá la variable del sistema `SY-SUBRC` = `0`
en caso contrario devolverá `4`

- SHIFT
desplaza un conjunto de caracteres eliminando los que no se necesiten

- SPLIT
Parte una cadena en pequeñas partes

- TRANSLATE
Convertir textos a mayúsculas

- STRLEN
Determina el tamaño de una cadena

```
REPORT Z_OPERACIONES_CADENAS.

* declaracion de variables
DATA: var01 TYPE C,
      var02 TYPE C,
      var TYPE C.
var01 = '   Hello'.
var02 = 'world'.

* concatenate
CONCATENATE var01 var02 INTO var SEPARATED BY '           '.
* Imprimimos el valor
WRITE: / 'Concatenate: ' , var.
SKIP 2.

* condense
CONDENSE var.
* Imprimimos el valor
WRITE: / 'Condense: ' , VARIABLE.
* El valor que deberia imprimir es: 'Hello world'
SKIP 2.

* replace
REMPLACE 'Hello' WITH 'Happy' INTO var.
WRITE: / 'Replace: '  , var.
SKIP 2.

* shift
SHIFT VARIABLE3 BY 1 PLACE
WRITE: / 'Shift: ' , var
* Eliminara la primera palabra y quedara 'world'
SKIP 2.

*split
var = 'Hi,how,is,your,name?'
DATA: var11 TYPE I,
      var12 TYPE I,
      var13 TYPE I,
      var14 TYPE I,
      var15 TYPE I.
SPLIT var AT ',' INTO var11, var12, var13, var14, var15.
WRITE : / 'Split: ',
        / 'var11: ' , var11,
        / 'var12: ' , var12,
        / 'var13: ' , var13,
        / 'var14: ' , var14,
        / 'var15: ' , var15.
SKIP 2.

* translate
CONCATENATE var11 var12  var13 var14 var15 INTO var SEPARATED BY ' '.
TRANSLATE var TO UPPER CASE.
WRITE: / 'Translate: ' , var.
SKIP 2.

* strlen
DATA lenght TYPE I.
lenght = STRLEN( var ).
WRITE : / 'Strlen: ' , lenght.

```
