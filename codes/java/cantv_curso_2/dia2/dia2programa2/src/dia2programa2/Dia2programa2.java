/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia2programa2;

import javax.swing.JFrame;

/**
 *
 * @author Participante
 */
public class Dia2programa2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        PDibujo panel=new PDibujo();
        
        //se crea un marco para contener el panel
        JFrame aplicacion=new JFrame();
        
        aplicacion.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        aplicacion.add(panel);
        aplicacion.setSize(250,250);
        aplicacion.setVisible(true);
    }
    
}
