# Apagar servidores de forma remota
Los administradores de servidores normalmente deben apagar servidores
de forma remota

#### Recuerda:
- Revisar en cual servidor estas conectado
- Linux no preguntar confirmación
- Es diferente apagar y reiniciar

#### Errores comunes
- Olvidar en que servidor uno esta conectado
- Apagar el Firewall
- Confundir apagar y reiniciar

#### Comandos
- `# shutdown -r now` reincia la máquina
- `# shutdown -h now` apagar la máquina fisicamente
- `# systemctl reboot` reiniciar

> **Nota!** `now` se refiere al momento en que se efectuara la accion  
En caso de espeficicar algun numero, es tomado como _minutos_

#### Reinicio `-r`
Amazon no muestra graficamente el estado del equipo,
dichas acciones se podran visualizar en el log del servidor, desde la consola administrativa del servicio. Podras ver el inicio o carga y el apagado

> **Nota!** Se cierra la conexion mientras el equipo se este reiniciando,
Ya transcurridos unos instantes se deberia ingresar al equipo nuevamente

#### Apagado fisico `-h`
El equipo no podra iniciar de manera remota, sino de manera fisica o presencial

Algunos servidores dedicados poseen una consola administrativa,
entre sus multiples permitira acciones como iniciar el equipo

#### `systemctl`
Posee algunos comandos interesantes puedes verlos con `systemctl --help`
- `poweroff`
- `reboot`
- `suspend`
- `hibernate`
- `hybrid sleep`
