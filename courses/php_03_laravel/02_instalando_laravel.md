[Inicio](../../) > [PHP con Laravel](./)

# Instalacion de Laravel

### Metodos de instalacion de Laravel
- Via Composer
- Via servidor virtualizado

#### Vía Composer
Composer es un manejador de dependencia de librerias hecho en PHP
disponible tanto para Windows, Linux, MAC
https://getcomposer.org/download/

> Nota! Debes tener instalado PHP en tu computador

Para instalar Laravel ejecuta desde la terminal el comando
`$ composer global require laravel/installer`
que descargara todos los archivos necesarios de Laravel
de forma globalmente en tu computador

#### Via Laravel Homestead
Homestead es una maquina virtual Ubuntu ya configurada
Posee aplicaciones basicas para desarrollar _entre muchas otras_:
- PHP
- Composer
- Servidor Web

Programas requeridos:
- VirtualBox
- Vagrant

> Nota! Debes especificamente descargar la vagrant box de Homestead

**Vagrant box:**
Es una caja contenedora del la semilla del sistema operativo Ubuntu,
la descargas desde terminal con el comando
`# vagrant box add laravel/homestead`

> Nota! Ve el proceso completo de configuracion de Homestead en:
./php_03_avanzado/03_homestead

#### Usando Laravel
Con el comando `$ laravel` tendremos un listado de los comandos de Laravel

#### Creando un proyecto en Laravel
Usamos el comando `$ laravel new nombre_del_proyecto`
cuando necesitamos crear un nuevo proyecto,
crea todas las carpetas para nuestros codigos
y descarga las librerias necesarias

#### Probando el proyecto
Cuando ya tengas creado el proyecto, desde la terminal posicionate en la carpeta
`$ cd carpeta_del_proyecto` y desde alli ejecuta el comando `$ php artisan serve`

**Artisan:** Es el programa para trabajar dentro de los proyectos.
`$ php artisan` muestra ver todos los comando disponibles de Laravel

**Servidor del proyecto:**
El comando `$ php artisan serve` creara un servidor virtual de tu proyectos
y genera una direccion url donde puedes acceder con tu navegador
cuando necesites visualizar el proyecto o hacer pruebas

> En mi caso la url fue: `127.0.0.1:8000`
> y si al acceder ves en la pagina web "Laravel" todo fue instalado correctamente
