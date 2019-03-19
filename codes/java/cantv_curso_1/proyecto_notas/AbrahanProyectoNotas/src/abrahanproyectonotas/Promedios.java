/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package abrahanproyectonotas;

/**
 *
 * @author Participante
 */
public class Promedios {
    
    public Double[] general(String matriz[][]){
        
        Double calculo[] ={0.0,0.0,0.0};
        for (int i=0;i<matriz.length;i++){
            for (int y=0;y<3;y++){
                try {
                    calculo[y]+=Double.parseDouble(matriz[i][y+2]);
                    System.out.print("nota"+(y+1)+": "+matriz[i][y+2]+" ");
                }
                catch(Exception e){
                    System.out.print("Desea Actualizar? Error Linea: "+(i+1)+" Nota: "+(y+1)+" Valor: "+matriz[i][y+2]);
                }
            }
            System.out.println("- linea"+(i+1)+".");
        }
        for (int y=0;y<3;y++){
            System.out.print("nota"+(y+1)+". Acumulado: "+calculo[y]+" ");
            calculo[y]=calculo[y]/matriz.length;
            System.out.println("Promedio: "+calculo[y]+" ");
        }
        return calculo;
    }
    
    public Double alumno(String matriz[]){
        Double calculo = null;
        return calculo;
    }
    
}
