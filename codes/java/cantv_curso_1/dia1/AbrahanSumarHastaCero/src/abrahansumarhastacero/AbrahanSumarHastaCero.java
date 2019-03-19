/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahansumarhastacero;
import abrahanleerteclado.*;
import java.io.IOException;

/**
 *
 * @author Participante
 */
public class AbrahanSumarHastaCero {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        
        /*
        ALGORITMO
        ---------
        variable int dato
        variable double numDatPos
        variable double numDatNeg
        variable int totalPos
        variable int totalNeg
        variable int total
        variable boolean salir
        
        repite mientras salir=negativo
        pedir dato (a)
        validar: dato es distinto de cero?
        si:
            total++
            dato es mayor a cero?
            si:
                numDatPos++
                totalPos += dato
            no:
                numDatoNeg++
                totalNeg += dato
            regresar hasta (a): repetir dato   
        no:
            salir
        */
        
        double dato=0;
        double numDatPos=0;
        double numDatNeg=0;
        int totalPos=0;
        int totalNeg=0;
        int total=1;
        boolean salir=false;
        System.out.println("Ciclo para sumar contar decimales positivos y negativos");
        System.out.println("Introduzca cero para detener.");        
        while (salir==false) {
            System.out.println("Introduce dato nro "+total+": ");
            dato=AbrahanLeerTeclado.decimal();
            if (dato != 0) {
                total++;
                if (dato>0) {
                    numDatPos++;
                    totalPos += dato;
                }
                else {
                    numDatNeg++;
                    totalNeg += dato;
                }   
            }
            else {
                salir=true;
            }
        }
        System.out.println("Ejecucion Terminada");
        System.out.println("Total "+numDatPos+" numeros positivos: "+totalPos);
        System.out.println("Total "+numDatNeg+" numeros negativos: "+totalNeg);
    }

}
