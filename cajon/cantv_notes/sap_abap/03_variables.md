# Variables

#### Tipos de datos primarios

|Tipo|Descripcion|Longitud por defecto|Longitud maxima|Valor inicial|
|:-:|:-:|:-:|:-:|:-:|
|C|Alfanumericos|1|1-65535|SPACE|
|D|Fecha (Date)|8|8|'0000000'|
|F|Flotante (Float)|8|8|0.0|
|I|Entero (Integer)|4|4|0|
|N|Numerico|1|1-65535|'0...0'|
|P|Empaquetados|8|1-16|0|
|T|Hora (Time)|6|6|'000000'|
|X|(Hexadecimales)|1|1-65535|X'00'|

#### Decretar variables
```
REPORT z_enteros_01.
* Declaramos los datos en ABAP con DATA
DATA: MiEntero01 TYPE I.
DATA: MiEntero02 TYPE I.
DATA: MiEntero03 TYPE I VALUE 12. " Le colocamos 12
* Ahora imprimiremos
WRITE: / 'EL NUMERO 3: ' , MiEnterio03.
```

##### Asignacion simple o directa
```
REPORT z_enteros_01.
* Declaramos los datos en ABAP con DATA
DATA: variable TYPE I,
      cadena TYPE STRING VALUE 'Hola mundo = '
* Asignamos valor a variable metodo simple o directo
variable = 32. "
* Ahora imprimiremos
WRITE: / cadena , 'VARIABLE Mivar01 = ' , MiVar01.
```

##### Asignacion `MOVE`
```
REPORT Z_ASIGNACION_MOVE.
* Declaramos la variable
DATA: MiEntero01 TYPE I VALUE 123,
      MiEntero02 TYPE I.
* Le asignamos un valor
MOVE MiEntero01 TO MiEntero02.
* Imprimimos el valor
WRITE: MiEntero02.
```
