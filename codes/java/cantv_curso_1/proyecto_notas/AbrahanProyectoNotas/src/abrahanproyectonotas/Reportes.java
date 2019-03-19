/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanproyectonotas;

import javax.swing.JOptionPane;

/**
 *
 * @author Participante
 */
public class Reportes {
    
    public void reporte(String [][] vector){
        boolean salir=false;
        while(!salir){
            String [] opciones={"Total General","Especifico","Promedio Estudiante","Salir"};
            String menu="Tipo de reportes";

            for (int i=0;i<opciones.length;i++){
                menu+="\n"+(i+1)+" "+opciones[i];
            }
            int opcion=Integer.parseInt(JOptionPane.showInputDialog(null, menu));
            switch (opcion){
                case 1: 
                    general(vector);
                    break;
                case 2: 
                    especifico(vector);
                    break;
                case 3: 
                    promedio(vector);
                    break;
                case 4: 
                    salir=true;
                    break;
            }
        }
    }
    
    public void general(String [][] vector){
        String cadena="";
        for (int i=0;i<vector.length;i++){
            for (int j=0;j<vector[0].length;j++){
                cadena+=vector[i][j]+", ";
            }
            cadena+="\n";
        }
        JOptionPane.showMessageDialog(null,cadena,"Resultado",JOptionPane.INFORMATION_MESSAGE);
    }
    public void especifico(String [][] vector){
        String nombre=JOptionPane.showInputDialog(null,"Nombre a buscar?"); 
        String apellido=JOptionPane.showInputDialog(null,"Apellido a buscar?");
        String titulo;
        titulo="Busqueda";
        String cadena;
        cadena="";
        boolean bandera;
        bandera= false;
        for (int i=0;(i<vector.length)&&(!bandera);i++){
            if (vector[i][0].equals(nombre)&&vector[i][1].equals(apellido)){
                bandera=true;
                cadena+="Informacion encontrada\n\nNombre: "+vector[i][0]+"\nApellido: "+vector[i][1]+"\n";
                cadena+="Nota 1: "+vector[i][2]+". Nota 2: "+vector[i][3]+". Nota 3: "+vector[i][4]+"\n";
                String [] notas = {vector[i][2],vector[i][3],vector[i][4]};

                //cadena+="Promedio de Notas: "+promedio;
            }
        }
        if (!bandera){
            titulo="Error!";
            cadena="Datos no encontrados";
        }
        JOptionPane.showMessageDialog(null,cadena,titulo,JOptionPane.INFORMATION_MESSAGE);
    }
    public void promedio(String [][] vector){
        Promedios calculo;
        calculo = new Promedios();
        Double [] resultado; 
        resultado = calculo.general(vector);
        String cadena="Promedios Generales:\n";
        cadena+="Nota 1: "+resultado[0]+"\n Nota 2: "+resultado[1]+"\n Nota 3: "+resultado[2];
        JOptionPane.showMessageDialog(null,cadena,"Informacion",JOptionPane.INFORMATION_MESSAGE);
    }
}
