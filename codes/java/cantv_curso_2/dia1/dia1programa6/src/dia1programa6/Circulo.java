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
public class Circulo extends AreaGeneral{
    int radio=8;
    Double area;
    
    public void area(){
        area=Math.PI*radio*radio;
    }
}
