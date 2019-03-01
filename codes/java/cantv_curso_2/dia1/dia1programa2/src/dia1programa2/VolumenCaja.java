/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa2;
            
/**
 *
 * @author Participante
 */
public class VolumenCaja {
    private Double largo=12.0, ancho=10.2, profundidad=11.5;

    public VolumenCaja(){
        System.out.println("(c0) El volumen del cubo es: "+this.largo*this.ancho*this.profundidad);
    }
    
    public VolumenCaja(Double largo){
        System.out.println("(c1) El volumen del cubo es: "+largo*largo*largo);
    }
    
    public VolumenCaja(Double largo, Double ancho, Double profundidad){
        System.out.println("(c2) El volumen del cubo es: "+largo*ancho*profundidad);
    }
    
    public VolumenCaja(int largo, int ancho, int profundidad){
        System.out.println("(c3) El volumen del cubo es: "+largo*ancho*profundidad);
    }
}
