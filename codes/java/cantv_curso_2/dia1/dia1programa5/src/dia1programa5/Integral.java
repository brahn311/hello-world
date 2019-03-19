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
public class Integral extends Area {
    public int altura;
    public int volumen;
    
    /*
    public Integral() {
            altura=12;
        System.out.println("hijo");
    }
    */
    public Integral(int largo, int ancho, int altura) {
        super(largo,ancho);
        this.altura=altura;
        System.out.println("hijo");
    }
    
    public void volumen(){
        
        volumen=largo*ancho*altura;        
    }
}
