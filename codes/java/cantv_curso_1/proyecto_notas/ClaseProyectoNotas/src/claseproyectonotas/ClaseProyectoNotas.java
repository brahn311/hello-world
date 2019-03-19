/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
Proyecto final con los trabajadores de sistemas
Fecha: 27-9-2018
Proyecto basado en notas de tres materias
Menu en ventana: Tipo de Operacion
1. ingresar datos
2. reportes
3. actualizar
0. salir

1. ingresar datos
nombre
apellido
nota1
nota2
nota3
fechaInscripcion
fechaNacimiento

2. reportes
General (ordenado)
...

3. actualizar
solicitar nombre y apellido
actualizar nota1 nota2 nota3

*/
package claseproyectonotas;

// Autor: Abrahan Omaña

import java.io.IOException;
import javax.swing.JOptionPane;

/**
 *
 * @author Participante
 */
public class ClaseProyectoNotas {

    /**
     * @param args the command line arguments
     */
    public static void /*menu*/ main(String[] args) throws IOException {
        // TODO code application logic here
        
        int opcion;
        String [] opciones={"Ingresar Datos","Reportes","Actualizar"};
        String menu="Tipo de Operaciones";
        for (int i=0;i<opciones.length;i++){
            menu+="\n"+(i+1)+" "+opciones[i];
        }
        opcion = Integer.parseInt(JOptionPane.showInputDialog(null, menu, "Bienvenido!",JOptionPane.QUESTION_MESSAGE));
        JOptionPane.showMessageDialog(null,"Usted ha seleccionado la opcion "+opciones[opcion-1]);

        switch (opcion){
            case 1:
                Ingresar in = new Ingresar();
                in.ingreso();
                in.guardar();
                //System.exit(0);
                break;
            case 2:
                Reportes re = new Reportes();
                re.reporte();
                break;
            case 3:
                break;

        }
        
    }
    
}
