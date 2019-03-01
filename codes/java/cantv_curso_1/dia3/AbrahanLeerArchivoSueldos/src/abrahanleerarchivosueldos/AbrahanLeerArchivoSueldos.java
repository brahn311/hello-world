/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanleerarchivosueldos;
import abrahanleerarchivo.*;
import java.io.IOException;
import javax.swing.JOptionPane;

/**
 *
 * @author Participante
 */
public class AbrahanLeerArchivoSueldos {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        String nombre="";
        String cadena="E://curso_algoritmo//dia3//AbrahanArchivoSueldos";
        String [][] matriz;
        //nombre=JOptionPane.showInputDialog(null,"Introduzca el nombre del archivo");
        cadena+=nombre+".txt";
        matriz=AbrahanLeerArchivo.leer(cadena);
        cadena="";
        for (int i=0;i<matriz.length;i++){
            for (int j=0;j<matriz[0].length;j++){
                cadena+=matriz[i][j]+", ";
            }
            cadena+="\n";
        }
        JOptionPane.showMessageDialog(null,cadena,"Resultado",JOptionPane.INFORMATION_MESSAGE);
        
    }
    
}
