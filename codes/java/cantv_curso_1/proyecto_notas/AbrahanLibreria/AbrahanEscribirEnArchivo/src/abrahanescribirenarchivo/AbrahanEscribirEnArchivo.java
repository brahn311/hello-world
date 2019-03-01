/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanescribirenarchivo;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

/**
 *
 * @author Participante
 */
public class AbrahanEscribirEnArchivo {

    /**
     * @param vector
     * @param operacion
     * @param nombre
     * @throws java.io.IOException
     */
    public static boolean escribir(String vector[][],boolean operacion,String nombre) throws IOException {
        // TODO code application logic here
        
        FileWriter fw=null;
        PrintWriter pw=null;
        boolean bandera=false;
        try{
            fw = new FileWriter(nombre, operacion);
            pw = new PrintWriter(fw);
        }
        catch(Exception e){
            System.out.println("Error en archivo...");
        }
        
        for (int i=0;i<vector.length;i++){
            String cadena="";
            for (int y=0;y<vector[0].length;y++){
                if (!"".equals(cadena)) {
                    cadena+=";";
                }
                cadena+=vector[i][y];
            }
            pw.println(cadena);
        }
        bandera=true;
        fw.close();
        return bandera;
    }
}
