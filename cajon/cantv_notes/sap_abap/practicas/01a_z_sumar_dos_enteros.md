*&---------------------------------------------------------------------*
*& Report  Z_SUMA_DOS_ENTEROS
*&
*&---------------------------------------------------------------------*
*&
*&
*&---------------------------------------------------------------------*

REPORT  Z_SUMA_DOS_ENTEROS.

* Declaracion de inputs

PARAMETERS: number1 TYPE I,
            number2 TYPE I.

* Declaracion de variables
DATA result TYPE I.

* Resultado
result = number1 + number2.

WRITE / result.
