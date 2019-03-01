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
public class Area {
    public int largo;
    public int ancho;
    public int area;
    
    /*
    public Area(){
        largo=20;
        ancho=10;
        System.out.println("padre");
    }
    */
    
    public Area(int largo, int ancho){
        this.largo=largo;
        this.ancho=ancho;
        System.out.println("padre");
    }
    
    public void area() {
        area=largo*ancho;
    }
}
