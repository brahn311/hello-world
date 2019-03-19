/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia2programa1;

/**
 *
 * @author Participante
 */
public class Dia2programa1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Circulo ci=new Circulo();
        System.out.println("El area del circulo es: "+ci.area());
        System.out.println("El volumen del circulo es: "+ci.volumen());
        System.out.println();
        
        //codigo optimizado con polimorfismo
        AreaGeneral[] ob=new AreaGeneral[3];
        ob[0]=new Cubo();
        ob[1]=new Circulo();
        ob[2]=new Cilindro();
        String [] cadena={"Cubo","Circulo","Cilindro"};
        /*
        String [] cadena=new String [3];
        cadena[0]="Cubo";
        cadena[1]="Circulo";
        cadena[2]="Cilindro";
        */
        
        for (int i=0;i<3;i++){
            System.out.println("El area del "+cadena[i]+" es: "+ob[i].area()+" Cm2");
            System.out.println("El volumen del "+cadena[i]+" es: "+ob[i].volumen()+" Cm3");
            System.out.println("* * *");
        }
        
    }
    
}
