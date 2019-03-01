/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanleerteclado;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

/**
 *
 * @author Participante
 */
public class AbrahanLeerTeclado {

    /**
     * @return 
     * @throws java.io.IOException
     */
    public static String iniciar() throws IOException {
        // TODO code application logic here
        
        String dato;
        /* como este metodo es estatico, la libreria no tiene metodos estaticos
        y se debe de crear un nuevo objeto en esta instancia */
        InputStreamReader var=new InputStreamReader(System.in); 
        //creando la instancia de un nuevo objeto de entrada en buffer.
        BufferedReader teclado=new BufferedReader(var);
        // leyendo el objeto encontrado en el buffer
        dato=teclado.readLine();
        
        // los metodos void no retornan datos, en este caso el metodo retorna una cadena
        return dato;
    }
    
    public static int entero() throws IOException {
        int numero;
        numero=Integer.parseInt(iniciar());
        return numero;
    }
    
    public static double decimal() throws IOException {
        double decimal;
        decimal=Double.parseDouble(iniciar());
        return decimal;
    }
}
