/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa5;

/**
 *
 * @author Participante
 */
public class Dia1programa5 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        // Integral in=new Integral();
        
        Integral in=new Integral(20,10,12);
        in.area();
        in.volumen();
        System.out.println("El area es: "+in.area);
        System.out.println("El volumen es: "+in.volumen);
    }
    
}
