/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package claseproyectonotas;

import javax.swing.JOptionPane;
import abrahanleerarchivo.*;

/**
 *
 * @author Participante
 */
public class Reportes {
    
    public void reporte(){
        int opcion;
        String [] opciones={"Total General","Especifico","Promedio Estudiante"};
        String menu="Tipo de reportes";
        
        for (int i=0;i<opciones.length;i++){
            menu+="\n"+(i+1)+" "+opciones[i];
        }
        opcion=Integer.parseInt(JOptionPane.showInputDialog(null, menu));
        switch (opcion){
            case 1: 
                general();
                break;
            case 2: 
                especifico();
                break;
            case 3: 
                estudiante();
                break;
        }
    }
    
    public void general(){
        
        
    }
    public void especifico(){
        
    }
    public void estudiante(){
        
    }
}
