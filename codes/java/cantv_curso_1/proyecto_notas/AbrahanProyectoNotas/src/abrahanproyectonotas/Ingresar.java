/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanproyectonotas;

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
        
        cantidad=Integer.parseInt(JOptionPane.showInputDialog(null,"Numero de estudiantes a ingresar?"));
        matriz= new String[cantidad][datos.length];
        for (int i=0;i<cantidad;i++){
            for(int j=0;j<datos.length;j++){
                cadena="Estudiante "+(i+1)+".\nIntroducir "+datos[j]+":";
                matriz[i][j]=JOptionPane.showInputDialog(cadena);
            }
        }
    }
    public String buscar(String nombre, String apellido){
        String posicion;
        posicion = null;
        return posicion;
    }
    
    public void guardar(String archivo) throws IOException{
        boolean bandera=false;
        bandera=AbrahanEscribirEnArchivo.escribir(matriz, true, archivo);
        if (bandera) JOptionPane.showMessageDialog(null,"El archivo ha sido Almacenado","Informacion!",JOptionPane.INFORMATION_MESSAGE);
        //(null,"El archivo ha sido Almacenado",JOptionPane.INFORMATION_MESSAGE);
    }
}
