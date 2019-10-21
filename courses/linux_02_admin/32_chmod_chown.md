# Permisos de archivos
Determinan que usuario posee cual archivo  
Tambien fijan quienes pueden operar ese archivo y como lo pueden hacer

- La información se muestra organizada en **bloques** de _usuario(u) grupo(g) otros(o)_
- Cada uno tiene distintos permisos _r=4(lectura) w=2(escritura) x=1(ejecución)_
- Los permisos estan organizados de manera octal, cada valor puede ser sumados
  1. _Ejecucion_
  1. _Lectura_
  1. Ejecucion + Lectura
  1. _Escritura_
  1. Escritura + Ejecucion
  1. Escritura + Lectura
  1. Escritura + Ejecucion + Lectura

|Tipo|usuario|grupo|otros|
|:-:|:-:|:-:|:-:|
|d|rwx|rwx|rwx|

> **Nota!** Cuando no posee el permiso, solo aparece un `-` (guion)

- `ls -l` Para listar archivos mostrando permisos

#### Cambiar permisos
- Metodo octal `chmod 751 [nombre de archivo]`  
Cada digito es un bloque u=7(rwx) g=5(wx) o=1(x)
- Metodo con operadores `chmod [bloque][+/-/=][permiso] [nombre de archivo]`  
  `chmod o-r test` quita a _otros_ el permiso de _lectura_ del archivo  
  Este metodo permite modificar varios bloques separando uno a uno con `,`
  - `chmod u+x,g+x,o+x test` `+` Agrega el permiso solo si no lo tiene agregado
  - `chmod u-x,g-x,o-x test` `-` quita el permiso solo si lo tiene agregado
  - `chmod u=rwx,g=wx,o= test` `=` asigna permisos quitando todos los anteriores  

##### Crear un archivo ejecutable
1. Crear el archivo `touch hola.sh`
1. Colocar como contenido:
 - La primera linea `#!/bin/sh` es obligatoria e identifica quien lo ejecuta  
```
#!/bin/sh
echo "hola"
whoami
```
> **Nota!** `which [programa]` Muestra la ruta del programa ejecuta los script
1. Cambiamos los permisos `chmod 755 hola.sh`
> **Nota!** al crear el archivo en sus permisos no tenemos ejecucion

#### Flags adicionales
> **Nota!** Esto es usado para `sudo` otorgue los permisos como si fueran root  
El uso de ello, por su comportamiento puede considerarse una violacion de seguridad
_Debe ser usado con precaucion_

- `chmod 4755 test` Ahora en la ejecucion del usuario aparece una `s`  
`4` Permite que el script sea ejecutado por otro usuario como si fuera el propietario
`2` En vez de el `4` para activar el mismo comportamiento para el grupo
- `chmod 0755 test` Restaura la ejecucion quitando la `s` de la ejecucion  
Opcion defaul, se ejecuta el script por el propio usuario y no como el propietario

> **Nota!** Investigar como asignar el _sticky_ se representa en permisos como `rwt`  
Sirve para que _otros_ usuarios, donde solo el propuetario puede borrar el archivo

#### cambiar de propietario
- `chown [propietario] [archivo]` Cambia solo el usuario propietario
- `chown [propietaroio]: [archivo]` Cambia el usuario y tambien el grupo

> **Nota!** Por default el usuario tiene su propio grupo llamado igual que el usuario
