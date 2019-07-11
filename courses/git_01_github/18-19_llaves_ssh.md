# Cómo funcionan las llaves públicas y privadas

Cualquier dato que viaja por la internet es vulnerable ser interceptado

Las llaves públicas y privadas nos ayudan a cifrar y descifrar nuestros archivos
de forma que los podamos compartir archivos sin correr el riesgo de que sean interceptados
durante su viaje por el oceano del internet

La forma de hacerlo es la siguiente:
- Ambas personas deben crear su _llave pública_ y _llave privada_
- Ambas personas pueden compartir su _llave pública_ a las otras partes
(recuerda que con la _llave pública_ no hay problema si la “interceptan”)
- La persona que quiere compartir un mensaje puede usar la _llave pública_ de la otra persona
para cifrar los archivos y asegurarse que solo puedan ser descifrados
con la _llave privada_ de la persona con la que queremos compartir el mensaje
- Con mensaje ya cifrado, se puede enviar a la otra persona sin problemas
en caso de que los archivos sean interceptados
- La persona a la que enviamos el mensaje cifrado debera usar su _llave privada_ para descifrar
el mensaje y ver los archivos

Puedes compartir tu _llave pública_ pero nunca tu _llave privada_

Crearemos nuestras llaves para compartir archivos con GitHub
sin correr el riesgo de que sean interceptados y no usaremos mas el protocolo https

### Secure Shell (SSH)
Configura tus llaves SSH en local para sifrar datos

Las llaves no son por proyecto, si no por persona

> **Nota!** verifica la configuracion de git `$ git config -l`
porque debes tener configurado _user.name_ y _user.email_
con el email de tu cuenta GitHub

#### Generar tus llaves
En la ruta `~` (tu carpeta home) usa el comando  
`$ ssh-keygen -t rsa -b 4096 -C "tu@email.com"`
- `ssh-keygen` generador de llaves
- `-t` especifica el algoritmo a usar para crear la llave
- `rsa` valor del algoritmo usado
- `-b`complejidad de la llave
- `4096` complejidad matematica usada en el algoritmo
- `-C` especifica el valor para la conexion de la llave
- `"tu@email.com"`email de conexion de la llave (la misma del usuario de GitHub)

> **Nota!**  
Preguntara la ubicacion de la llave, puedes modificar esa ubicacion de la llave,
pero no deberias cambiarla, es mala practica, puedes dejarla en blanco  
Tambien te permite colocar una contraseña de seguridad adiiconal,
es muy buena idea proteger tu llave privada con una contraseña

#### Configurar nuestro sistema
Debemos configurar el sistema operativo para que reconozca que la llave existe

##### En Windows y Linux:
1. Encender el "servidor" de llaves SSH de tu computadora  
`$ eval $(ssh-agent -s)`
2. Añadir tu llave SSH al sistema operativo  
`ssh-add [ruta-de-tu-llave-privada].ssh/id_rsa`  
_No debes usar la llave id_rsa.pub_

##### En Mac:
1. Encender tu llave al "servidor" de llaves SSH de tu computadora  
`$ eval "$(ssh-agent -s)"`

 > **Nota!** para una versión de OSX superior a _Mac Sierra (v10.12)_
debes crear o modificar un archivo llamado `config` en la carpeta `~/.ssh/`
con el siguiente contenido (ten cuidado con las mayúsculas)
```
Host *
        AddKeysToAgent yes
        UseKeychain yes
        IdentityFile ruta-donde-guardaste-tu-llave-privada
```

2. Añadir tu llave SSH al "servidor" de llaves SSH de tu computadora  
`ssh-add -K ruta-donde-guardaste-tu-llave-privada`  
> **Nota!** en caso de error puedes ejecutar el comando sin el argumento_ `-K`
que pertenece a nuevas un servidor de llaves de iCloud
