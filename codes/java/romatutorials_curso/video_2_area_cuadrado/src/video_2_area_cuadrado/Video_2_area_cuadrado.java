/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_2_area_cuadrado;

import java.util.Scanner;
// se importa la clase Scanner del paquete java.util
/**
 *
 * @author aomana03
 */
public class Video_2_area_cuadrado {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here

        Scanner teclado=new Scanner(System.in);
        // instanciamos teclado, es clase Scanner, proporciona metodo para leer la captura del teclado

        int lado, perimetro;
        // definimos dos variables enteras vacias, el valor es opcional dado a que lo indicamos despues

        System.out.print("Ingrese el lado del cuadrado: ");
        // mostrar en la pantalla el texto sin salto de linea

        lado=teclado.nextInt();
        // capturando la entrada <numerica> por teclado y almacena en la variable

        perimetro=lado*4;
        // realizando operacion matematica

        System.out.println("El perimetro del cuadrado es: "+perimetro);
        // mostrando el mensaje final y concatenando el resultado y añade salto de linea
    }

}
