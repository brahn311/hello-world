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
package abrahanproyectonotas;

// Autor: Abrahan Omaña

import javax.swing.JOptionPane;
import abrahanleerarchivo.*;
import abrahanescribirenarchivo.*;
import java.io.IOException;
/**
 *
 * @author Participante
 */
public class AbrahanProyectoNotas {
    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        boolean cerrar=false;
        String[][] vector;       
        String opcion;
        
        String ruta="E://curso_algoritmo/proyecto_notas/";
        String archivo=ruta+JOptionPane.showInputDialog(null, "Nombre del archivo a trabajar?:", "Datos.txt");
        
        while (!cerrar){
            try{
                vector=AbrahanLeerArchivo.leer(archivo);
            }
            catch(Exception e){
                JOptionPane.showMessageDialog(null, "Archivo no extiste. Debe Ingresar datos Primero", "Atencion!",JOptionPane.ERROR_MESSAGE);
                vector=null;
            }
            
            opcion = JOptionPane.showInputDialog(null, "Tipo de operacion:\n1. Ingresar Datos\n2. Reportes\n3. Actualizar\n4. Salir", "Bienvenido!",JOptionPane.QUESTION_MESSAGE);
            switch (opcion){
                case "1" :
                case "a" :
                case "i" :
                case "d" :
                case "Datos" :
                case "datos" :
                case "Dato" :
                case "dato" :
                case "Ingresar" :
                case "ingresar" :
                case "ing" :
                    JOptionPane.showMessageDialog(null, "Opcion Ingresar Datos ha sido Seleccionada", "Ingresar Datos",JOptionPane.INFORMATION_MESSAGE);
                    Ingresar in = new Ingresar();
                    in.ingreso();
                    in.guardar(archivo);
                    break;
                case "2":
                case "b":
                case "r":
                case "Reportes":
                case "reportes":
                case "Reporte":
                case "reporte":
                case "rep":
                    JOptionPane.showMessageDialog(null, "Opcion Reportes ha sido Seleccionada", "Reportes",JOptionPane.INFORMATION_MESSAGE);
                    Reportes re = new Reportes();
                    re.reporte(vector);
                    break;
                case "3":
                case "c":
                case "Actualizar":
                case "actualizar":
                case "act":
                    JOptionPane.showMessageDialog(null, "Opcion Actualizar ha sido Seleccionada", "Actualizar",JOptionPane.INFORMATION_MESSAGE);
                    break;
                case "4":
                case "0":
                case "s":
                case "x":
                case "Salir":
                case "salir":
                    int confirmar;
                    confirmar = JOptionPane.showConfirmDialog(null, "¿Esta seguro de cerrar el programa?", "Salir",1,JOptionPane.OK_CANCEL_OPTION);
                    if (confirmar==0){
                        cerrar=true;
                    }
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Disculpe, Opcion Invalida", "Error!",JOptionPane.ERROR_MESSAGE);
                    break;
            }
        }
    }
}