/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package test1;

/**
 *
 * @author diego pereira
 */
public class Test1 {
    public static int lado, division, segmento;
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        lado=600;
        division=15;
        segmento=lado/division;
        System.out.println("segmento="+segmento);
        
        for (int i=1;i<15;i++){
            System.out.println(i);
            System.out.println("0,"+lado+","+i+","+i);
            System.out.println(i+","+i+","+lado+",0");
            System.out.println("0,0,"+(division-i)+","+i);
            System.out.println((division-i)+","+i+","+lado+","+lado);
            /*
            System.out.println("0,"+lado+","+i*segmento+","+i*segmento);
            System.out.println(i*segmento+","+i*segmento+","+lado+",0");
            System.out.println("0,0,"+(division-i)*segmento+","+i*segmento);
            System.out.println((division-i)*segmento+","+i*segmento+","+lado+","+lado);
            */
        }
    }
    
}
