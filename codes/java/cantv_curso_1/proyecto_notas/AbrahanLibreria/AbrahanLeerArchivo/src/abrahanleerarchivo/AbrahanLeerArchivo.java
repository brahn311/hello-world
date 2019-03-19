/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanleerarchivo;
import java.io.File;
import java.io.FileReader;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.IOException;
import javax.swing.JOptionPane;
/**
 *
 * @author Participante
 */
public class AbrahanLeerArchivo {

    /**
     * @param nombre
     * @return 
     * @throws java.io.FileNotFoundException
     */
    public static String [][] leer(String nombre) throws FileNotFoundException, IOException {
        // TODO code application logic here

        File archivo=null;
        FileReader fr=null;
        BufferedReader br=null;
        int contador=0;
        

        try{
            archivo = new File(nombre);
            fr = new FileReader(archivo);
            br = new BufferedReader (fr);
            while (br.readLine()!=null){
                contador++;
            }
        }
        catch(Exception e){
            //System.out.println("Error en la lectura del archivo!");
            JOptionPane.showMessageDialog(null,"Archivo no encontrado.","Error!",JOptionPane.WARNING_MESSAGE);
        }

        String[][] vectorTotal = new String[contador][];
        try{
            String cadena;
            archivo = new File(nombre);
            fr = new FileReader(archivo);
            br = new BufferedReader (fr);
            for (int i=0;i<contador;i++){
                cadena=br.readLine();
                vectorTotal[i]=cadena.split(";");
            }
            JOptionPane.showMessageDialog(null,"Archivo Cargado Correctamente.","Informacion!",JOptionPane.INFORMATION_MESSAGE);
        }
        catch(Exception e){
            //System.out.println("Error en la lectura del archivo!");
            JOptionPane.showMessageDialog(null,"No se ha podido cargar el archivo!.","Error!",JOptionPane.WARNING_MESSAGE);
        }
        return vectorTotal;
    }
}
