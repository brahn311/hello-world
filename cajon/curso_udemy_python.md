### tupla: 
diccionario = {'uno':0,'dos':x,'tres':x*2,'cuatro':x*3}
print(diccionario)

Funciones para variables:

- help(variable)  
Muestra informacion de ayuda (tipo, metodos, metodos dinamicos, ejemplos, definiciones de datos)

- dir(variable)  
Muestra los metodos (no funciona en IDE Python, pero si en Jupiter)

# Print
Acepta caracteres para realizar funciones especiales usando `\` (barra invertida)
- \t tabulacion
- \n salto linea

Modificaciones:
- mostrar tal como esta escrito, sin tomar en cuenta caracteres especiales
print(r"c:\nombre\nombre_2")

Triples comillas 
print("""Esto permite
hacer los saltos
de lineas sin usar
el /n en el codigo
""")

Una instruccion en multiples lineas
print("Esto permite \
hacer los saltos \
de lineas sin usar \
el /n en el codigo \
")
> funciona para cualquier instruccion, recuerde que Python requiere que solo sea una instruccion por linea,

### Formato:
- print('{} es el primer valor y {} es el segundo'.format(1,2))
- print('{1} es el segundo valor y {0} es el primero'.format(1,2))
-`sustitucion de variables`
x=10
y=20
z=30
print(f'{z} es el mayor valor y {x} es el primer valor, y si lo restamos da {y}')
> **!Nota¡** es `f` indiferente de mayusculas o minusculas
- `metodo .title` Capitaliza la primera letra de cada palabra
print(f"{nombre.title()} cuesta {diccionario[uno]} pesos, con {diccionario[dos]} % de descuento")

# Operadores de asignacion
test+=1
test-=1
test*=2
test/=2
test%=3 modulo
test//=3 divicion entera
test**=3 potenciacion

# Operadores de comparacion
Comparando caracteres:
El valor asignado se realiza mediante el orden de ascii de menor a mayor

Listado ascii
 !”#$%&'()*+,-./
0123456789:;<=>?
@ABCDEFGHIJKLMNO
PQRSTUVWXYZ[\]^_
`abcdefghijklmno
pqrstuvwxyz{|}~

> **!Nota¡** La lista ascii Empieza con SPACE y termina con DEL

[Fuente](https://elcodigoascii.com.ar/caracteres-ascii-control/inicio-encabezado-codigo-ascii-1.html) 

# Cadenas, Indices y slicing
Se puede reordenar una cadena en orden inverso 
A parte de cortar la cadena segun la pocision tambien afecta el orden
`[posicion_inicio_cerrada:posicion_fin_abierta<:orden_opcional>]`

- Cerrada (teorias de conjuntos)  
Implica que el la pocision sea incluida dentro del conjunto (mayor o igual que)
- Abierta  
Implica que sera incluido hasta la pocision anterior y no incluye la pocision marcada marcada (menor que).
```
cadena="esreel ed airebed y ,anedac anu se atsE"
cadena_volteada=cadena[::-1]
```

Sea la `cadena="0123456789"`
- `cadena[1]` = `1` (valor positivo) toma un caracter (iniciando en `0`)
- `cadena[-1]` = `9` (valor negativo) toma un caracter iniciando por el final
- `cadena[:]` = `0123456789` cadena completa, desde <inicio>:<final>
- `cadena[2:]` = `23456789`
- `cadena[:3]` = `012`
- `cadena[2:2]` = `` porque la posicion nunca se incluye
- `cadena[2:3]` = `2`
- `cadena[2:4]` = `23`
- `cadena[-8:-4]` = `2345`
- `cadena[-3:-1]` = `78`
- `cadena[-1:-3]` = `` vacia porque no tiene sentido
- `cadena[-1:-3:]` = `` no tiene sentido porque el orden es en normal
- `cadena[-1:-3:-1]` = `987` con orden inverso si tiene sentido
