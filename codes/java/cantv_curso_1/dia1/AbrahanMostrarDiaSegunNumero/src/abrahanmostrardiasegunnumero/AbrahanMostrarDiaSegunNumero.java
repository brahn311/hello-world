/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanmostrardiasegunnumero;
import abrahanleerteclado.*;
import java.io.IOException;

/**
 *
 * @author Participante
 */
public class AbrahanMostrarDiaSegunNumero {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        int numero=0;
        String dia;
        dia="";
        System.out.print("Introduzca un numero del 1 al 7: ");
        numero=AbrahanLeerTeclado.entero();
        switch (numero) {
            case 1: System.out.println("Lunes");
            break;
            case 2: System.out.println("Martes");
            break;
            case 3: System.out.println("Miercoles");
            break;
            case 4: System.out.println("Jueves");
            break;
            case 5: System.out.println("Viernes");
            break;
            case 6: System.out.println("Sabado");
            break;
            case 7: System.out.println("Domingo");
            break;
            default : System.out.println("El numero no corresponde a un dia.");
            break;
        }
    }
    
}
