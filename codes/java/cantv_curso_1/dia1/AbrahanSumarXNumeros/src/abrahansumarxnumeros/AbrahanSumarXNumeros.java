/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahansumarxnumeros;
import abrahanleerteclado.*;
import java.io.IOException;

/**
 *
 * @author Participante
 */
public class AbrahanSumarXNumeros {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        
        double dato=0;
        double numDatPos=0;
        double numDatNeg=0;
        int totalPos=0;
        int totalNeg=0;
        int cantidad=0;
        
        System.out.println("Ciclo para sumar contar decimales positivos y negativos");
        System.out.print("Introduzca la cantidad de numeros a sumar: ");        
        cantidad=AbrahanLeerTeclado.entero();
        for (int i=0;i<cantidad;i++) {
            System.out.println("Introduce dato nro "+i+1+": ");
            dato=AbrahanLeerTeclado.decimal();
            if (dato != 0) {
                if (dato>0) {
                    numDatPos++;
                    totalPos += dato;
                }
                else {
                    numDatNeg++;
                    totalNeg += dato;
                }   
            }
        }
        System.out.println("Ejecucion Terminada");
        System.out.println("Total "+numDatPos+" numeros positivos: "+totalPos);
        System.out.println("Total "+numDatNeg+" numeros negativos: "+totalNeg);
    }

}