# Gestores de paquetes en Linux

La instalación de software en cualquier sistema operativo es una necesidad inherente al OS,
sin software de terceros muchas tareas serían muy difíciles de hacer a nivel de computadoras y servidores

En GNU/Linux instalar software es algo muy fácil
siempre y cuando se haga uso del sistema de gestión de paquetes

#### Sistema de gestión de paquetes

Conjunto de herramientas que permite la automatización de los procesos de paquetes de software

- Instalación
- Configuración
- Actualización
- Eliminación

El término gestor de paquetes es comúnmente utilizado en los sistemas _*NIX_,
especialmente en _GNU/Linux_, en el que la mayoría de las distribuciones tienen un sistema gestor

Para entenderlo un poco mejor puede hacerse una analogía
con un marketplace de algún sistema operativo móvil como Android,
en el que es posible buscar, instalar, actualizar y eliminar aplicaciones con mucha facilidad
y sin tanta intervención humana

> **Nota!** un marketplace como Play Store es un sistema gestor de paquetes para Android

# Sistema de repositorios de software
El sistema de gestor de paquetes por sí solo no puede funcionar,
debe tener algún sitio de donde obtener la información necesaria para descargar el paquete de software,
para eso están los _repositorios_, que son sitios centralizados en donde están:
- Toda la metadata
- El código fuente
- Los binarios del software

Todos estos disponibles para instalar a través de los sistemas de gestión de paquetes

#### YUM (Yellowdog Updater, Modified) Fedora / CentOS

Es una herramienta de código abierto desarrollada en _Python_
utilizada para hacer la instalación de paquetes de software en distribuciones que usan
_RPM (RPM Package Manager)_ como formato de empaquetamiento,
como _Red Hat Enterprise Linux, Fedora, CentOS, SuSe y Mandriva_

- Para instalar un software `yum install`
- Para desinstalar un software `yum remove`
- Para actualizar un software `yum update`
- Para actualizar todo el sistema `yum update`

#### APT (Advanced Packaging Tool) Debian, Ubuntu y más derivados

No es en sí un sistema gestor de paquetes directo al usuario
sino un conjunto de librerías _C++_ que utilizan _otros programas
para la distribución de paquetes_ como `apt-get` `apt-cache` y `aptitude`

Utiliza más que todo para la gestión de software que viene empaquetado en formato deb,
utilizada en sistemas Debian y derivados.

- Para instalar un software `aptitude | apt-get install`
- Para desinstalar un software `aptitude | apt-get remove`
- Para actualizar un software `aptitude install "" paquete="">| apt-get  --only-upgrade install`
- Para actualizar todo el sistema `aptitude safe-upgrade | apt-get upgrade`
