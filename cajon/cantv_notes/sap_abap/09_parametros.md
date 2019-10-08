# PARAMETERS
Permite entrar y capturar un valor de teclado para procesarlo

```
REPORT Z_PARAMETERS.

PARAMETERS: name TYPE STRING,
            lastname TYPE STRING,
            age TYPE I.
WRITE: / 'name' , name,
       / 'lastname' , lastname,
       / 'age' , age.
```
> **Nota!** Luego de capturar podemos operarlos, sumar, etc
