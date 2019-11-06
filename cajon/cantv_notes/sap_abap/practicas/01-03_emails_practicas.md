Buen Día Compañeros

Se les saluda, les comento que inicialmente mi intención era que primero asistieran a la inducción de ABAP que fue suspendida la semana pasada, para luego arrancar con algunos ejercicios, pero en vista que que aún no contamos con la nueva fecha  me parece conveniente que por favor iniciemos con el primer ejercicio, a continuación  las especificaciones:

PARTE 1:
Crear un programa Z que muestre la suma de dos valores numérico del tipo I (Entero), esos valores crearlos como parámetros de entrada, como se muestra a continuación:

         Titulo: Sumatoria de dos números
         Atributos del programa:
                  Tipo: Ejecutable
                  Grupo de Autorización: ZBC_DWB
                  Paquete: ZBC_ENT

La idea es que por favor se guíen por alguno de los manuales que tienen, y estudien  lo siguiente:
         COMO CREAR UN PROGRAMA Z
         PARAMETERS
         EVENTOS:
                  start-of-selection.
                  end-of-selection.
                  initialization.
                  top-of-page.
         TIPOS DE DATOS UTILIZADOS EN ABAP
         DECLARACIÓN DE VARIABLES
         SENTENCIAS CONDICIONALES E ITERATIVAS (IF, WHILE, DO....)
         SENTENCIA DE ESCRITURA WRITE

PARTE 2:
Colocar el  parámetro 1 como obligatorio
Al parámetro  2 por defecto colocar un valor especifico.
Dentro de un ciclo Multiplicar el resultado de la suma de los parámetros de entrada por una constante (libre decisión).
Mostrar cada resultado  siempre y cuando este  sea menor o igual  ‘10.000.000’
Mostrar un encabezado que contenga el siguiente titulo: LISTA DE VALORES CALCULADOS, número de página y usuario que esta ejecutando el reporte (tomar en cuenta los eventos mencionados  anteriormente)..
Cualquier duda al respecto no duden en  preguntarnos.

---

Los siguientes link y archivos anexos les pueden servir de ayuda:
http://www.blogdesap.com/2013/07/tutorial-abap-y-reports.html
http://www.cvosoft.com/glosario-sap/abap/abap-mi-primer-programa-abap-2122.html
http://www.cvosoft.com/sistemas_sap_abap/recursos_tecnicos_abap/que-es-abap.php

A la orden para cualquier duda o sugerencia.

2da Parte ("2da version")
Por favor realizar lo siguiente:

Colocar el  parámetro 1 como obligatorio
Al parámetro  2 por defecto colocar el valor 3.
Dentro de un ciclo Multiplicar el resultado de la suma de los parámetros de entrada por una constante (libre decisión).
Mostrar cada resultado  siempre y cuando este  sea menor o igual  ’50.000’
Mostrar un encabezado que contenga el siguiente titulo: LISTA DE VALORES CALCULADOS, número de página y usuario que esta ejecutando el reporte (tomar en cuenta los eventos mencionados en ejercicio anterior)...

Para esto les recomiendo leer:
  Valores opcionales para parámetros
  Declaración de constantes
  Sentencias de Control: DO, WHILE, IF
  Variables del sistema, ejemplo SY- PAGNO, SY-UNAME

PARTE 3:

La idea de este ejercicio es que estudien lo relacionado con:
el manejo de tablas internas y llamados a módulos de funciones
para lo cual a  les anexo varios links que me parecieron interesantes y sencillos:

https://www.codejobs.biz/es/blog/2013/12/21/transacciones-mas-utilizadas-en-abap
https://www.codejobs.biz/es/blog/2013/09/19/programacion-abap-sap-el-primer-programa
https://www.codejobs.biz/es/blog/2013/09/21/programacion-abap-sap-2-programa
https://www.codejobs.biz/es/blog/2013/09/18/programacion-abap-sap
https://www.codejobs.biz/es/blog/2013/12/04/continuacion-aprendiendo-a-desarrollar-en-abap-para-sap-funciones
https://www.codejobs.biz/es/blog/2013/12/16/continuacion-aprendiendo-a-desarrollar-programando-con-alv

Pasos a seguir:
  Tomar como base el programa que ya desarrollaron y realizar el llamado al módulo de funciones estandar SPELL_AMOUNT,
    el cual recibe un numérico y devuelve el valor en letras
  Guardar los valores generados en una tabla interna.
  Mostrar en la salida del reporte dos columnas,        NUMERO  LETRA
