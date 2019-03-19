/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa3;

/**
 *
 * @author Participante
 */
public class Dia1programa3 {
    static int vector2[]={59,12,20,30,32,87,99};
    static int n;
    /**
     * @param args the command line arguments
     */
    
    public static void main(String[] args) {
        // TODO code application logic here
        n=2018;
        
        PasoVector pv=new PasoVector();
        pv.recibe(vector2,n);
        for (int i=0;i<vector2.length;i++) {
            System.out.println("Vector_"+i+": "+vector2[i]);
            System.out.println("El valor de n es: "+n);
        }
    }
    
}
