/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanguardarmatriz;
// import abrahanleerteclado.*;
import abrahanescribirenarchivo.*;
import java.io.IOException;
import javax.swing.JOptionPane;
import java.util.Random;

/**
 *
 * @author Participante
 */
public class AbrahanGuardarMatriz {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        String cadena="E://curso_algoritmo/dia3/Abrahan";
        boolean bandera=false;
        
        String nombre = JOptionPane.showInputDialog(null,"Introduzca el nombre del archivo:");
        cadena +=nombre+".txt";
        int alumnos= Integer.parseInt(JOptionPane.showInputDialog(null,"Cantidad de alumnos:"));
        int materias= Integer.parseInt(JOptionPane.showInputDialog(null,"Cantidad de materias:"));
        
        int[][] matriz= new int[alumnos][materias];
        Random notas;
        notas = new Random();
        for (int i=0;i<alumnos;i++){
            for (int j=0;j<materias;j++){
                matriz[i][j]=notas.nextInt();
            }
        }
        boolean operacion;
        String tipoOperacion=JOptionPane.showInputDialog(null,"Introduzca el tipo de operacion:\n(Agregar (1)/Borrar (2))");
        switch (tipoOperacion){
            case "agregar":
            case "Agregar":
            case "a":
            case "A":
            case "1":
                operacion=true;
                tipoOperacion="Modificado.";
                break;
            default:
                JOptionPane.showMessageDialog(null,"Opcion no determinada, El archivo sera reescrito.","Error!",JOptionPane.ERROR_MESSAGE);
            case "borrar":
            case "Borrar":
            case "b":
            case "B":
            case "2":
                operacion=false;
                tipoOperacion="Sobreescrito.";
                break;
        }
        bandera=AbrahanEscribirEnArchivo.escribir(matriz, operacion, cadena);
        if (bandera) JOptionPane.showMessageDialog(null,"El archivo ha sido "+tipoOperacion,"Informacion",JOptionPane.INFORMATION_MESSAGE);
    }
}
