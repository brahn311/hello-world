# PERFORM
Permite organizar el código en frangmentos _(funciones)_
de tal forma que sea mucho más fácil su mantenimiento

#### crear subrutina interna
1. Al escribir `PERFORM [nombre_de_subrutina]` (ejecutar subrutina)
1. Hacer _doble click izquierdo_ en el `[nombre_de_subrutina]`
1. Aparece un dialogo: _Subrutina no existe ¿Desea crear el objeto?_
   - Opciones: `Si` `No` `Cancelar`
1. Al seleccionar `Si` un nuevo dialogo pregunta si ubicar en:
   - `nuevo include` (programa externo)
   - `prog.control` (codigo interno)
1. Seleccionamos `prog.control`
   - El programa incluye el texto, areas y comentarios de la subrutina

> **Nota!** El bloque de instrucciones de la subrutina se escribe al final  
La llamada a la rutina se realiza con `PERFORM`  
El bloque de la subrutina se encuentra entre `FORM` y `ENDFORM`

#### crear subrutina interna
Continuaremos el proceso iniciando luego del paso `4`
5. Seleccionamos `nuevo include`
1. Abrira nueva ventana
   - `nombre_del_programa` + `_` + `nombre_de_rutina`(12) + `_` + `F`(numero_del_archivo)
1. Ya podemos incluir el codigo de la nueva subrutina
1. Verificamos errores
1. Activamos
1. Damos click _Atras_ para salir del Editor
   - Pedira guardar antes de salir (si no lo hemos hecho)

##### Ejemplo de subrutina
```
*&--------------------------------------------------*
*& FORM my_subrutina
*&--------------------------------------------------*
*& text
*&--------------------------------------------------*
*& --> p1  text
*& <-- p2  text
*&--------------------------------------------------*
FORM my_subrutina_external.
   SKIP.
   WRITE 'ok'.
ENDFORM.
```

```
REPORT Z_SUBRUTINA.

DO 5 TIMES.
   PERFORM my_subrutina.
ENDDO.

PERFORM my_subrutina_external.

*&--------------------------------------------------*
*& FORM my_subrutina
*&--------------------------------------------------*
*& text
*&--------------------------------------------------*
*& --> p1  text
*& <-- p2  text
*&--------------------------------------------------*
FORM my_subrutina.
   WRITE: / 'Esto es un ejemplo de subrutina interna'.
   SKIP.
ENDFORM.
```

##### subrutina con pase de parametros
```
REPORT Z_SUBRUTINAS_E19 .

DATA: Entero TYPE I VALUE 1.

* Implementación de la subrutina.
PERFORM MSUBRUTINA2 USING ENTERO.

FORM MSUBRUTINA2 USING ENTERO.
  WRITE: 'Imprimira el Entero:', ENTERO.
ENDFORM.
```
