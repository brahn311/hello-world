/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_4_for;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_4_for {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner(System.in);
        
        System.out.println("Cual tabla deseas ver?");
        int numero;
        numero = teclado.nextInt();
        
        System.out.println("Tabla del numero " + numero + ":");
        for (int x = 0; x <= 10; x++) {
            System.out.println(numero + " * " + x + " = " + (numero * x));
        }
    
    }
    
}
