/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_2_sumar_2_multiplicar_2;

import java.util.Scanner;

/**
 *
 * @author aomana03
 */
public class Video_2_sumar_2_multiplicar_2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here

        Scanner teclado=new Scanner(System.in);
        int suma, producto, valor1, valor2, valor3, valor4;
        System.out.print("Ingrese el 1er valor: ");
        valor1=teclado.nextInt();
        System.out.print("Ingrese el 2do valor: ");
        valor2=teclado.nextInt();
        System.out.print("Ingrese el 3er valor: ");
        valor3=teclado.nextInt();
        System.out.print("Ingrese el 4to valor: ");
        valor4=teclado.nextInt();
        suma=valor1+valor2;
        System.out.println("La suma del 1er y 2do valor es: "+suma);
        producto=valor3*valor4;
        System.out.println("El producto del 3er y 4to valor es: "+producto);

    }

}
