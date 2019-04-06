/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_4_do_while;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_4_do_while {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        System.out.println("Cantidad de digitos (presione 0 para salir) ");
        
        Scanner teclado = new Scanner(System.in);
        int valor;
        
        do {
            System.out.println("");
            System.out.print("Ingrese un numero entre 1 y 999: ");
            valor = teclado.nextInt();
            
            if (valor >= 1000) {
                System.out.println("Error: Numero fuera del rango! Intente de nuevo.");
            } else {
                if (valor >= 100) {
                    System.out.println("Tiene 3 digitos");
                } else {
                    if (valor >= 10) {
                        System.out.println("Tiene 2 digitos");
                    } else {
                        if (valor > 0) {
                            System.out.println("Tiene 1 digito");
                        } else {
                            System.out.println("Saliendo...");
                        }
                    }
                }
            }
        } while (valor != 0);
                
    }
    
}
