# Constantes
Las constantes son variables que nunca cambian su valor en toda la ejecución del programa,
la definición de VALUE es obligatorio

#### Declaramos la constante

`CONSTANTS: MONEDA(2) TYPE C VALUE 'EUR'.`


```
REPORT Z_CONSTANTES.
* Declaramos una constante
CONSTANTS: MONEDA(2) TYPE C VALUE 'EUR'.
WRITE: MONEDA.
```

#### Constantes del sistema

```
REPORT YTEXT.
DATA TEMP TYPE I.
WRITE: /'EL MANDANTE:',SY-MANDT.
WRITE: /'USUARIO:',SY-UNAME.
WRITE: /'IDIOMA:',SY-LANGU.
WRITE: /'HORA LOCAL:',SY-UZEIT.
WRITE: /'TRANSACCION:',SY-TCODE.
WRITE: /'PROGRAMA ACTUAL:',SY-REPID.
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
