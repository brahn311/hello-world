# Constantes
Son variables que nunca cambian su valor en toda la ejecución del programa,
la definición de VALUE es obligatorio

#### Declaramos la constante

`CONSTANTS: MONEDA(2) TYPE C VALUE 'EUR'.`

> **Nota!** `(2)` es la longitud?

```
REPORT Z_CONSTANTES.
* Declaramos una constante
CONSTANTS: moneda TYPE C VALUE 'EUR'.
WRITE: / 'Moneda =' moneda.
SKIP 2.
* moneda = 'VEN'.
WRITE: / 'Moneda =' moneda.
```

#### Constantes del sistema

```
REPORT z_constantes_sys01.
DATA TEMP TYPE I.
WRITE: / 'EL MANDANTE: ' , SY-MANDT.
WRITE: / 'USUARIO: ' , SY-UNAME.
WRITE: / 'IDIOMA: ' , SY-LANGU.
WRITE: / 'HORA LOCAL: ' , SY-UZEIT.
WRITE: / 'FECHA DEL SISTEMA: ' ,  SY-DATUM.
WRITE: / 'TRANSACCION: ' , SY-TCODE.
WRITE: / 'PROGRAMA ACTUAL: ' , SY-REPID.

DO 10 TIMES.
  TEMP = TEMP + 1.
  " SY-INDEX guarda el contador del LOOP
  IF SY-INDEX = 5.
    WRITE: /'Es 5'.
  ELSE.
    WRITE: / SY-INDEX.
  ENDIF.
ENDDO.
```

##### SY-SUBRC

Indica que la sentencia anterior a la llamada de esta variable se ejecuto o no
```
REPORT z_constantes_sys02.
* Seleccionamos la transacción SE11
SELECT SINGLE * tsct WHERE tcode = 'SE11'; " ****PUNTO Y COMA ?????????
IF SY-SUBRC = 0.
  WRITE 'Se encuentra la transacción'.
ENDIF.
IF SY-SUBRC <> 0.
  WRITE:/ 'No se encontró'.
ENDIF.
IF SY-SUBRC <> 0.
  MESSAGE 'No se encontró' TYPE 'I'.
ENDIF.

```
