/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia2programa1;

/**
 *
 * @author Participante
 */
public class Circulo implements AreaGeneral {
    Double radio=12.12;
        
    @Override
    public Double area() {
        Double area;
        area= 2*Math.PI*radio*radio;
        return area;
    }
    
    @Override
    public Double volumen() {
        Double volumen;
        volumen=(4/3)*(radio*radio*radio);
        return volumen;
    }
}
