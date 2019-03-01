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
public class ElMayor {
    static private Double variable=0.34;
    
    static public void detecta() {
        if (Dia1programa1.x>Dia1programa1.y) {
            System.out.println("El mayor es: "+Dia1programa1.x);
        }
        else {
            System.out.println("El mayor es: "+Dia1programa1.y);
        }
    }
    
    static public double obtener() {
        return variable;
    }

}
