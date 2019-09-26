# Hola Mundo en Windows 7

[Youtube](https://www.youtube.com/watch?v=xz5Qn9AdJ6U&list=PLJN7H8Mnf3k9W0Y5w1IziWwECgwPAxmUD)
Curso de Abap - Marlon Falcon Hernandez

- Domina el 70% del mercado de los ERP

#### Modulos
- **SAP VIM** (Vendor invoice Management)
- **SAP CRM** (Customer Relationship Management)
- **SAP ERP** (Enterprise Resource Planning)
- **SAP PLM** (Product Lifecycle Management)
- **SAP SCM** (Supply Chain Management)
- **SAP SRM** (Supplier Relationship Management)

##### SAP VIM
(Vendor invoice Management)  
_Gestión de facturas de proveedores_  

##### SAP CRM
(Customer Relationship Management)  
_Gestión de la relación con el cliente_  

##### SAP ERP
(Enterprise Resource Planning)  
_Sistema de planificación de recursos empresariales_  
Programa o herramienta de SAP a ser desarrollada por este curso, al cual le pertenece el lenguaje de programacion ABAP

##### SAP PLM
(Product Lifecycle Management)  
_Administración del ciclo de vida de productos_  

##### SAP SCM
(Supply Chain Management)  
_Administración de la cadena de suministro_  

##### SAP SRM
(Supplier Relationship Management)  
_Gestión de relaciones con proveedores_  

#### ABAP
Lenguaje orientado a objetos, es interpretado, el codigo se almacenado internamente,
y este programa se ejecuta cuando es llamada la transaccion

# Iniciar SAP
1. Acceder al icono en escritorio SAP Logon
   - Iniciara _SAP Netweaver - SAP GUI for Windows_
   - Abre la ventana mostrado el listado de conexiones
1. Accede al servidor
   - Introduces el Mandate
   - Pide el usuario y contraseña (muestra asteriscos en el campo)
1. Accedes a SAP Easy Access (inicio)
   - Presenta los distintos Modulos  
     En logistica esta:
     - Manejo de materiales _MM_
     - Recursos humanos
     - Herramientas
       - Workbench ABAP (Transacciones a nivel de programacion)
1. En el cuadro de texto ubicado en la esquina superior izquierda  
Coloca la transaccion `se38`+`ENTER` _Editor ABAP_

- Mandante: (particion del servidor dedicada a SAP)
Regularmente existen 4 mandantes
  - Prueba
  - Calidad
  - Produccion
  - Sandbox (pruebas espeficias)

#### Configurando editor ABAP
Accedes por medio de la transaccion `se38` y se abre una ventana (dynpro)
1. Nombre del programa  
   Anotas el nombre del programa, siempre deben empezar con `y` o `z` `z_holamundo_abrahan`
   - Selecciona Codigo Fuente > Crear
1. Se abre otra ventana de dialogo
   - Titulo: (cadena larga) `Ejemplo de mi primer programa`
   - Atributos: Tipo > 1 Programa ejecutable
   - Crear
1. Crear entrada en catalogo
   - Paquete: (dejar vacio)
   - Objeto local
1. Creara y mostrara un documento de editor de textos

#### Documento editor ABAB
- Todos los programas empiezan con REPORT + Nombre_del_programa
- Los comandos se autocompletan con la tecla `TAB`
- Las palabras reservabas se colocan en mayusculas al ser autocompletadas
- Todas las lineas terminan con `.` (punto)

1. Añade tu primera linea de instruccion:
```
WRITE 'Hola Mundo'.
```

#### Ejecutar un programa
1. Antes de ejecutar debes tener el programa guardado (boton con diskette)
1. Activar (boton tipo fosforo) Tecla `CONTROL`+`F3`
   - click en el boton Check verde (se carga en memoria)
1. Ejecutar (boton directo) Tecla `F8`
1. Cambia la ventana mostrando
   - Titulo
   - Linea divisoria
   - contenido

#### Salir del editor
1. Click en el boton Atras

#### modificando el programa
1. Seleccionar la transaccion `se38`
1. Marcar el nombre del programa
1. Seleccionar: codigo fuente > modificar
1. Hacer los siguientes cambios
   - Cambia la linea del `'hola mundo'`
   ```
   WRITE : / 'Hola Mundo' , '2'.
   ```
1. Verificar errores el codigo con el boton verificar (antes de ejecutar)

> **Nota!** Al usar `,` (concatenar) debes usar `:`  
`/` funciona para dar el salto de linea al final
