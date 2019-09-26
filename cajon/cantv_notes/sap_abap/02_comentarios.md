# Comentarios en ABAP

#### Pretty Pinter
1. Creamos un nuevo programa
   - `z_holamundo2_abrahan` > codigo fuente > crear
   - Titulo: Comentarios de Ejemplo
   - Tipo: 1 Programa ejecutable > Grabar
   - Paquete: $TMP > Objeto local
1. Ir al menu de Utilidades > Opciones > Editor ABAP > Pretty Printer
   - Seleccionar Convercion mayusc./minusc.
     - Mayusculas > Check

Ahora al tener un codigo, puedes usar el boton Pretty Pinter  
Cambia las palabras reservadas minusculas por mayusculas

#### Comentarios
- Desde el inicio de linea `* Comentarios linea completa`
- Cualquier parte de la linea `"Comentarios entre comillas dobles"`

Estilo oficial de _SAP_
```
*&---------------------------------------------------------------------------*
*& Comentario
*&---------------------------------------------------------------------------*
```

#### SKIP
Instruccion que genera un salto de linea

- `SKIP.` _Genera una linea de separacion_
- `SKIP 10.` _Genera diez lineas de separacion_

#### WRITE
Imprime o da salida por pantalla
- Imprime cadenas encerradas entre `'` comillas simples
- Imprime varias cadenas colocando despues del `WRITE` el caracter `:` y las cadenas seguidas por `,`
- `/` indica que requiere un salto de linea al final de la cadena
- Escribir varias lineas usando un solo `WRITE`
```
WRITE : / 'Linea1'.
SKIP.
WRITE : / 'Linea2' ,
        / 'Linea3' ,
        / 'Linea4'.
```
