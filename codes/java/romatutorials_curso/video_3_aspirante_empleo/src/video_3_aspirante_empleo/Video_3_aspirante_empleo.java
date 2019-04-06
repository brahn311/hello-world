/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_3_aspirante_empleo;

import java.util.Scanner;

/**
 *
 * @author operador
 */
public class Video_3_aspirante_empleo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    
        /*
        Contexto- Un aspirante a empleo realizo un test de capacitacion
        Datos-
            cantidad total de preguntas
            cantidada total de respuestas contestadas corectamente
        Confeccionar un programa que pida los datos por teclado y muestre el nivel del mismo
        Salida-
            nivel maximo:   Porcentaje >= 90%
            nivel medio:    Porcentaje >= 75% y <90%
            nivel regular:  Porcentaje >= 50% y <75%
            fuera de nivel: Porcentaje > 50%
        */

        Scanner teclado = new Scanner (System.in);

        int total_preguntas, total_correctas;

        System.out.println("Total de preguntas realizadas?:");
        total_preguntas = teclado.nextInt();

        System.out.println("Total de respuestas contestadas correctamente?:");
        total_correctas = teclado.nextInt();

        int porcentaje = (total_correctas * 100) / total_preguntas;
        System.out.println("Porcentaje: " + porcentaje);
        
        if (porcentaje >= 90) {
           System.out.println("Nivel Maximo");
        } else {
            if (porcentaje >= 75) {
                System.out.println("Nivel Medio");
            } else {
                if (porcentaje >= 50) {
                    System.out.println("Nivel Regular");
                } else {
                    System.out.println("Fuera de Nivel");
                }
            }
        }
    }
    
}
