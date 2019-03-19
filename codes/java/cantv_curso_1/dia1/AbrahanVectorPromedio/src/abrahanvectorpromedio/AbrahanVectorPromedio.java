/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanvectorpromedio;
import abrahanleerteclado.*;
import java.io.IOException;
import java.util.Random;
/**
 *
 * @author Participante
 */
public class AbrahanVectorPromedio {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        int dato;
        double promedio;
        promedio=0;
        dato=0;
        
        Random aleatorio = new Random();
        System.out.print("Cantidad de celdas en el vector?: ");
        dato=AbrahanLeerTeclado.entero();
        int vector[] = new int[dato];
        for (int i=0;i<dato;i++){
            vector[i]= aleatorio.nextInt(20)+1;
        }
        for (int i=0;i<dato;i++){
            promedio+=vector[i];
            System.out.println("Celda "+i+". Valor: "+vector[i]);
        }
        System.out.println("El promedio es: "+promedio/vector.length);
    }
}
