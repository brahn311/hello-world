# Uso de variables de entorno, bashrc, profile
Las variables de entorno permiten configurar diferentes ambientes cómo de desarrollo o producción, también guardar llaves de seguridad

Como administrador uno utiliza las variables de entorno dentro de contenedores
para pasar parametros como _la base de datos_, _contraseñas_,

#### Variables de entorno
Una variable de entorno es simplemente una variable

- Crear una variabla de entorno `# platzi="http://platzi.com"`
- Imprimir variable `# echo $PLATZI`
- Listas todas las variables que tienes en ese bash`# export`

> **Nota!** Cada sesion de bash no comparten variables,
tiene sus propias variables configuradas

Puedes configurar variables con contraseñas, accesos de bases de datos  
Los programas pueden acceder a estas variables y set-tear las configuraciones

- PATH: Variable interna donde se revisa cada uno de los directorios donde se buscan binarios
- USER, USERNAME
- HOME

Es muy frecuente cuando un configura DB como _oracle_ donde uno necesita setear un _oracle home_

Donde setear y crear las variables de entorno? en el archivo `.bashrc`

#### `.bashrc`
Archivo oculto en el directorio _HOME_, guarda scripts basicos de bash, en este puedes
- Configurar variables para solamente ese usuario
- Registrar alias
- Configurar alert
- Añadir scripts

Tambien tenemos un `/etc/bash.bashrc` general que afecta a todos los usuarios y cuentas que se loggean

> **Nota!** Muchos _rookit_ o ataques agregan codigo al `.bashrc` para generar sesiones o agregar scripts
para añadir binarios o tener carpetas de accesos diferentes

#### `.profile`
Este es similar al `.bashrc` pero solo afecta a lo que esta registrado en el mismo `.bashrc`

Existe un `.profile` generico para todos los usuarios en `/etc/profile`
Tambien puedes usar el `/etc/profile.d` dependiendo para que se necesite

- Agregar una variable de entorno  
Agregar una línea al archivo declarando las variables
```
export HOME_DB=/var_new
```
Las variables de entorno solo se mantienen durante la sesión, debes exportarlas para guardarlas
(sin la palabra _export_ no se añadira a la sesion actual)

> **Nota!** Usando `$ sudo su -` obligas a refrescar `.profile` cargando nuevamente los valores de variables  
Usando `$ sudo su` usa de manera compartida las variables de sesiones anteriores
