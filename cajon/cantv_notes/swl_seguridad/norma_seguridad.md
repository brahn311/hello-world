# Norma
#### Seguridad de la información para sistemas, plataformas TI y equipos de red en Cantv y sus empresas filiales

_Resumen, notas y observaciones sobre el documento._

#### Requisitos básicos
10. Consideraciones específicas
	1. Control de Acceso a Sistemas, Plataformas TI o equipos de Red
		1. Para autenticar el acceso del (la) usuario(a) a los sistemas se debe utilizar el protocolo LDAP; usando SSL, TLS o SSH como protocolos de transporte, siempre con un nivel de criptografía que ofrezca claves igual o mayor a 1024 bits y autenticación mutua entre el cliente y el servidor
		1. El servidor LDAP corporativo contiene la información asociada al _usuario(a)_, el _perfil_ y _clave de acceso_. Esta informacion deberá ser protegida por un esquema **criptográfico** no reversible
		1. Si la información del _usuario(a)_ almacenada en el directorio LDAP no contiene una clave de acceso, se negará el acceso al mismo
		1. En caso de que no se pueda utilizar el protocolo LDAP, deberá implementarse el protocolo _RADIUS_ para autenticación, autorización y auditoria del _usuario(a)_
		1. La autenticación de los equipos de Red se realizará mediante el protocolo TACACS en caso de no poder integrarse vía protocolo RADIUS
		1. El uso de la matriz de coordenadas es requeridos para controlar el acceso de los _usuarios(as)_ a sistemas clasificadas como críticas para la Empresa
		1. El autorizar o denegar el acceso se consideran relevantes y deben ser reflejados en los registros de auditoría de los sistemas, plataformas TI y equipos de red, como se especifica en el registro de auditoría
		1. La expiración o bloqueo de las claves de acceso por inactividad o por exceso de fallas en la autenticación, será manejada automáticamente por el servidor LDAP, según el caso, basándose en los eventos de auditoría asociados a los accesos del sistema
		1. Los sistemas en un proceso de procura deben contemplar los directorios o servicios LDAP o RADIUS aprobados por la GST. En ningún caso deben implantarse nuevos directorios o servicios para la autenticación de usuarios(as) o asignación de perfiles
		1. Los sistemas deben contemplar una adecuada segregación de funciones, asegurando que estén separadas de las operaciones del sistema las siguientes funciones:
			- Creación y eliminación de usuarios(as)
			- Creación y definición de perfiles
			- Asignación de perfiles a los usuarios(as)
			- Configuración y generación de los registros de auditoría
			- Almacenamiento de los registros de auditoría
		1. Los _usuarios(as)_ con privilegios para la **administración de los sistemas** no deben tener privilegios para alterar la información de los _usuarios(as)_ que se encuentran definidos en el sistema
		1. Los sistemas deben contar con los mecanismos que permitan cumplir con las directrices definidas en el documento normativo aprobado **Gestión de Contraseñas (NOR-029)**
		1. Todo sistema debe emplear la autenticación y autorización de sus _usuarios(as)_ al sistema para el acceso a los mismos
	1. Recuperación y respaldo de la información
		1. Todo sistema en producción, debe contar con un proceso efectivo de respaldo y recuperación del mismo, así como de sus datos. Es responsabilidad del equipo de proyecto que desarrolla o implementa, suministrar el proceso que debe contemplar los casos de fallas simples y las incidencias mayores o desastres, antes de la puesta en producción
		1. El plan de respaldo y recuperación, debe definirse con la premisa que se cuenta con un equipo con características técnicas similares al sistema a restaurar y al sistema de operación instalado, con base a las recomendaciones del fabricante. Deben identificarse las personas responsables de la recuperación de los sistemas, plataformas de TI o equipo de red, así como las personas que efectuarán el seguimiento al plan de recuperación.
		1. Debe disponerse de almacenamiento local para los eventos registrados en el servidor o servidores que soportan los sistemas, plataformas de TI o equipo de redes. Estos registros deberán ser almacenados periódicamente, no menos de una vez al mes, firmado criptográficamente y enviado a uno de los servidores de acopio designado para efectos de archivo y comparación (de acuerdo a lo dispuesto en la sección _10.5 Transferencia de datos_)
	1. Registro de auditoría (Sistema Operativo y Aplicativo)
		1. xxx
		1. xxx
		1. xxx
	1. Sincronización de relojes
		1. xxx
		1. xxx
	1. Transferencia de datos
		1. xxx
		1. xxx
		1. xxx
		1. xxx
		1. xxx
	1. Almacenamiento de datos
		1. xxx
		1. xxx
	1. Evaluación de la solución de TI y equipo de red
		1. xxx
		1. xxx
		1. xxx
	1. Recomendaciones de seguridad tecnológica
		- Anexo Informativo A: Vulnerabilidades Comunes

##### Investigar
- Protocolo RADIUS
- RFC-3377. Version LDAP aprobada por GST
- RFC-2865. Generar las trazas de auditoría RADIUS
- NOR-029. Gestion de Contraseñas
