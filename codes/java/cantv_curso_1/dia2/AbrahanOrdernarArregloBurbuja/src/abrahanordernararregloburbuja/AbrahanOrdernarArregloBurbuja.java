/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanordernararregloburbuja;
import abrahanleerteclado.*;
import java.io.IOException;
import java.util.Random;
/**
 *
 * @author Participante
 */
public class AbrahanOrdernarArregloBurbuja {

    /**
     * @param args the command line arguments
     * @throws java.io.IOException
     */
    public static void main(String[] args) throws IOException {
        // TODO code application logic here
        /*
        Algoritmo
        ---------
        pedir cantidad de valores
        llenar el arreglo
        mostrar el arreglo generado
        ordenar
        mostrar el orden durante cada ciclo
        */
        int tamaño=0;
        int memoria=0;
        int arreglo[];
        //boolean bandera=false;
        Random aleatorio = new Random();
        System.out.print("Introduzca la cantidad de elementos a ordenar: ");
        tamaño=AbrahanLeerTeclado.entero();
        arreglo = new int [tamaño];
        for (int i=0;i<tamaño;i++){
            arreglo[i]= aleatorio.nextInt(100);
            System.out.print("["+arreglo[i]+"]\t");
        }
        System.out.println("Arreglo generado");
        for (int y=0;(y<arreglo.length-1)/*&&(!bandera)*/;y++){
            int cambios;
            cambios = 0;
            for (int i=0;i<arreglo.length-y-1;i++){
                if(arreglo[i]>arreglo[i+1]){
                    memoria = arreglo[i];
                    arreglo[i]=arreglo[i+1];
                    arreglo[i+1]=memoria;
                    cambios++;
                }
            }
            for (int i=0;i<tamaño;i++){
                System.out.print("["+arreglo[i]+"]\t");
            }
            System.out.println("Ciclo: "+(y+1)+". Cambios: "+cambios);
            //if (cambios==0) bandera=true;
        }
    }
}
