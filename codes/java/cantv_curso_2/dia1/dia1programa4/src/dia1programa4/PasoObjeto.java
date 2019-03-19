/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa4;

/**
 *
 * @author Participante
 */
public class PasoObjeto {
    public Double lado;
    public Double area;
    
    public void area(){
        lado=8.0;
        area=lado*lado;
    }
    
    public void mostrar(PasoObjeto g){
        System.out.println("Esta es el área del cuadrado: "+g.area);
    }
}
