/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanmatrizcondialogo;
import javax.swing.JOptionPane;
import java.util.Random;
/**
 *
 * @author Participante
 */
public class AbrahanMatrizConDialogo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int[][] matriz_a;
        int[][] matriz_b;
        int[][] resultado;
        int numfila;
        int numcolumna;
        String fila;
        String columna;
        String opera;
        fila=JOptionPane.showInputDialog(null,"Introduzca el número de filas: ");
        numfila = Integer.parseInt(fila);
        columna = JOptionPane.showInputDialog(null, "Introduzca el número de columnas: ");
        numcolumna = Integer.parseInt(columna);
        opera = JOptionPane.showInputDialog(null, "Introduzca el tipo de operacion: ");
        matriz_a = new int[numfila][numcolumna];
        matriz_b = new int[numfila][numcolumna];
        Random aleatorio = new Random();
        for (int i=0;i<numfila;i++){
            for (int j=0;j<numcolumna;j++){
                matriz_a[i][j]=aleatorio.nextInt(20)+1;
                matriz_b[i][j]=aleatorio.nextInt(20)+1;
            }
        }
        if ("sumar".equals(opera)||"restar".equals(opera)){
            resultado = operaciones(matriz_a,matriz_b,opera);
            String cadena="El resultado de "+opera+" es: \n";
            for (int i=0;i<numfila;i++){
                for (int j=0;j<numcolumna;j++){
                    cadena += resultado[i][j]+"  ";
                }
                cadena += "\n";
            }
            //System.out.println("El resultado de "+opera+" es: "+cadena);
            JOptionPane.showMessageDialog(null,cadena,"Resultado",JOptionPane.INFORMATION_MESSAGE);
        }
        else {
            //System.out.println("La operacion seleccionada es incorrecta");
            JOptionPane.showMessageDialog(null,"La operacion seleccionada es incorrecta.","Error!",JOptionPane.WARNING_MESSAGE);
        }
    }
    
    public static int[][] operaciones(int matriz_a[][], int matriz_b[][], String operacion){
        int fil=matriz_a.length;
        int col=matriz_a[0].length;
        int [][] nueva_matriz;
        nueva_matriz = new int[fil][col];
        for (int i=0;i<fil;i++){
            for (int x=0;x<col;x++){
                switch (operacion){
                    case "sumar": nueva_matriz[i][x] = matriz_a[i][x]+matriz_b[i][x]; break;
                    case "restar": nueva_matriz[i][x] = matriz_a[i][x]-matriz_b[i][x]; break;
                }
            }
        }
        return nueva_matriz;
    }
}
