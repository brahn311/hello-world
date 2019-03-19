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
public class Cubo implements AreaGeneral {
    Double ancho=30.0;
    Double largo=32.0;
    Double alto=10.23;
    
    @Override
    public Double area() {
        Double area;
        area= 2*(largo*ancho)+2*(ancho*alto)+2*(largo*alto);
        return area;
    }
    
    @Override
    public Double volumen() {
        Double volumen;
        volumen=ancho*alto*largo;
        return volumen;
    }
}
