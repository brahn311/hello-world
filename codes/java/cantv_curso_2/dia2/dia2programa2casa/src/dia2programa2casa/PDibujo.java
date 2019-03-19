/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia2programa2casa;

import java.awt.Graphics;
import javax.swing.JPanel;

/**
 *
 * @author Participante
 */
public class PDibujo extends JPanel{
    //Dibuja una x desde las esquinas del panel
    
    @Override
    public void paintComponent(Graphics g){
        //llama a paintComponent para asegurar que el panel se muestre correctamente
        super.paintComponent(g);
        
        int anchura=getWidth();
        int altura=getHeight();
        //g.drawLine(0,0,anchura,altura); 
        //g.drawLine(0,altura,anchura,0);
        int division, sancho, salto;
        division=15;
        sancho=anchura/division;
        salto=altura/division;
        for (int i=1;i<15;i++){
            g.drawLine(0,altura,i*sancho,i*salto);
            g.drawLine(i*sancho,i*salto,anchura,0);
            g.drawLine(0,0,(division-i)*sancho,i*salto);
            g.drawLine((division-i)*sancho,i*salto,anchura,altura);
        }
    }
}
