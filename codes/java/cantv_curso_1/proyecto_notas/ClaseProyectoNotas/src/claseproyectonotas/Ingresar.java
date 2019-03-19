/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package claseproyectonotas;

import abrahanescribirenarchivo.*;
import java.io.IOException;
import javax.swing.JOptionPane;

/**
 *
 * @author Participante
 */
public class Ingresar {
    String [][] matriz;
    int cantidad;
    public void ingreso(){
        String[] datos={"Nombre","Apellido","Nota 1","Nota 2","Nota 3","Fecha de Inscripcion","Fecha de Nacimiento"};
        String cadena="";
        
        cantidad=Integer.parseInt(JOptionPane.showInputDialog(null,"Numero de estudiantes a ingresar?:"));
        matriz= new String[cantidad][datos.length];
        for (int i=0;i<cantidad;i++){
            for(int j=0;j<datos.length;j++){
                cadena="Estudiante "+(i+1)+".\nIntroducir "+datos[j];
                matriz[i][j]=JOptionPane.showInputDialog(cadena);
            }
        }
    }
    public void guardar() throws IOException{
        String cadena="E://curso_algoritmo/dia3/Abrahan";
        boolean bandera=false;
        
        String nombre = JOptionPane.showInputDialog(null,"Introduzca el nombre del archivo:");
        cadena +=nombre+".txt";

        bandera=AbrahanEscribirEnArchivo.escribir(matriz, true, cadena);
        if (bandera) JOptionPane.showMessageDialog(null,"El archivo ha sido Almacenado","Informacion!",JOptionPane.INFORMATION_MESSAGE);
        //(null,"El archivo ha sido Almacenado",JOptionPane.INFORMATION_MESSAGE);
    }
}
