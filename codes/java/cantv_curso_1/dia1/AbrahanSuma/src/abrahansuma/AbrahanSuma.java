/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahansuma;
import abrahanleerteclado.*;
import java.io.IOException;

/**
 *
 * @author Participante
 */
public class AbrahanSuma {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        
        double a;
        a=0;
        int b;
        b=0;
        boolean bandera;
        bandera=false;
        do {
            try {
                System.out.println("Introduzca un numero decimal (a): ");
                a=AbrahanLeerTeclado.decimal();
                bandera=true;
            }
            catch(IOException error){
                System.out.println("Error en dato (a)!");
                bandera=false;
            }
        } while (!bandera);
        System.out.println("Introduzca un entero (b): ");
        b=AbrahanLeerTeclado.entero();
        System.out.println("Resultado de sumar "+a+" + "+b+" es:\n"+(a+b));
    }
    
}
