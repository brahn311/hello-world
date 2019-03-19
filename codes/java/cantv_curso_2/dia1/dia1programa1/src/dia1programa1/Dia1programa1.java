/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa1;

/**
 *
 * @author Participante
 */
public class Dia1programa1 {
    static public int x; 
    static public int y; 
    static public int z; 
    /**
     * @param args the command line arguments
     */
    
    public static void main(String[] args) {
        // TODO code application logic here
        x=88;
        y=100;
        suma();
        promedio();
        ElMayor EM=new ElMayor();
        EM.detecta();
    }
    static public void suma() {
        z=x+y;
        System.out.print("El resultado de la suma: ");
        System.out.println(z);
    }
        
    static public void promedio() {
        int prom=(x+y)/2;
        System.out.print("El resultado del promedio: ");
        System.out.println(prom);
    }
}
