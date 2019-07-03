# ¿Qué es un Branch (rama) y cómo funciona un Merge en Git?

Al hacer `git init` se crea por default la rama master (rama principal)
en ella se almacenaran los commits que se realicen

Los commits son la única forma de tener un registro de los cambios
Esos commits son almacenados en ramas, estas amplifican mucho más el potencial de Git

> **Nota!** para entender el concepto de ramas, imaginate a git como un arbol
donde la carpeta donde esta el `.git` es la carpeta raiz y esta sera tu rama principal

Puedes cambiarle el nombre a rama master, tambien puedes crear nuevas ramas
y a partir de esta crear flujos de trabajo independientes

Crear una nueva rama se trata de copiar un commit y pasarlo a otro lado (a otra rama)
y continuar el trabajo de una parte específica de nuestro proyecto sin afectar el flujo de trabajo principal

> **Nota!** a lo largo del proyecto se originan distintas ramas y el arbol comenzara a ramificarse  
Mientas que la rama nueva sera distinta, la rama master continuará sin cambios

#### Ventajas de usar ramas
- Podemos crear todas las ramas y commits que queramos
- Podemos aprovechar el registro de cambios de Git para crear ramas
- Traer versiones viejas del código, arreglarlas y combinarlas de nuevo

#### Estándar de equipos de desarrollo:
- Todo lo que esté en la rama `master` va a producción
- Las nuevas features, características y experimentos van en una rama `development`
(para unirse a master cuando estén definitivamente listas)
- Los issues o errores se solucionan en una rama `hotfix` (para unirse a master tan pronto como sea posible)

Acciones entre las ramas:
- _checkout_  crear una nueva rama, permite moverte entre ramas
- _merge_ une dos ramas

#### merge
Solo ten en cuenta que hacer `merge` entre ramas puede generar _conflictos_
y algunos archivos pueden ser diferentes en ambas ramas
- Git puede intentar unir estos cambios automáticamente pero no siempre funciona
- En algunos casos somos nosotros los que debemos resolver estos conflictos de forma manual
