/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanareavolumencilindro;
import abrahanleerteclado.*;
import java.io.IOException;
/**
 *
 * @author Participante
 */
public class AbrahanAreaVolumenCilindro {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        Double radio=0.0;
        Double altura=0.0;
        Double vector[];
        System.out.print("Introduza el radio del cilindro: ");
        radio=AbrahanLeerTeclado.decimal();
        System.out.print("Introduza la altura del cilindro: ");
        altura=AbrahanLeerTeclado.decimal();
        vector=calculo(radio,altura);
        System.out.printf("El volumen del cilindro es: %5.2f%n",vector[0]);
        System.out.printf("El area del cilindro es: %5.2f%n",vector[1]);
    }
    public static Double[] calculo(Double radio,Double altura){
        Double resultado[];
        resultado = new Double [2];
        /* volumen */resultado[0]=Math.PI*radio*radio*altura;
        /* area */resultado[1]=2*Math.PI*radio*radio+2*Math.PI*radio*altura;
        return resultado;
    }
}
