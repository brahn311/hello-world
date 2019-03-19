/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa6;

/**
 *
 * @author Participante
 */
public class Dia1programa6 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Rectangulo re=new Rectangulo();
        Circulo ci=new Circulo();
        Triangulo tr=new  Triangulo();
        re.area();
        ci.area();
        tr.area();
        System.out.println("El area del rectangulo es: "+re.area);
        System.out.println("El area del circulo es: "+ci.area);
        System.out.println("El area del triangulo es: "+tr.area);
    }
    
}
