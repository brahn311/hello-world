/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_3_aprobar_estudiante;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_3_aprobar_estudiante {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner (System.in);
        int nota1,nota2,nota3;
        System.out.println("Ingrese 1ra nota:");
        nota1 = teclado.nextInt();
        System.out.println("Ingrese 2da nota:");
        nota2 = teclado.nextInt();
        System.out.println("Ingrese 3ra nota:");
        nota3 = teclado.nextInt();
        int promedio = (nota1 + nota2 + nota3) / 3;
        
        if (promedio >=7)
        {
            System.out.println("Estudiante Aprobado!");
        }
        else
        {
            System.out.println("Estudiante Reprobado!");    
                    
        }
    }
    
}
