/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_4_while;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_4_while {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner(System.in);
        
        int n, x, valor, pares, impares;
        
        x = 1;
        pares = 0;
        impares = 0;
        
        System.out.println("Cuantos numeros ingresara?:");
        n = teclado.nextInt();
        
        while (x <= n) {
            System.out.println("Ingrese el valor: ");
            valor = teclado.nextInt();
            if (valor % 2 == 0) {
                pares++;
            } else {
                impares++;
            }
            x++; 
        }
        
        System.out.println("Cantidad de pares: " + pares);
        System.out.println("Cantidad de impares: " + impares);
        
    }
    
}
