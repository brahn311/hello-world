/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_3_bisiesto;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_3_bisiesto {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner(System.in);
        System.out.println("Introduce el año:");
        int anio = teclado.nextInt();
        
        if ((anio % 4 == 0) && (anio % 100 != 0) || (anio % 400 == 0)) {
            System.out.println("El año es bisiesto");
        } else {
            System.out.println("El año no es bisiesto"); 
        }
    }
    
}
