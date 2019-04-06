/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package video_5_crear_clases;

/**
 *
 * @author operador
 */
public class Video_5_crear_clases {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Personas persona_1 = new Personas("Abrahan",34);
        System.out.println("Nombre: " + persona_1.getNombre());
        System.out.println("Edad: " + persona_1.getEdad());
        
        Personas persona_2 = new Personas("Franyer",20);
        System.out.println("Nombre: " + persona_2.getNombre());
        System.out.println("Edad: " + persona_2.getEdad());
    }
    
}
