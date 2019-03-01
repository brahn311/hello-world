/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia1programa2;

/**
 *
 * @author Participante
 */
public class Dia1programa2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Double dlargo=10.0;
        Double dancho=11.0;
        Double dprofundidad=12.0;
        int ilargo=1;
        int iancho=2;
        int iprofundidad=3;
        
        VolumenCaja vc0=new VolumenCaja();
        VolumenCaja vc1=new VolumenCaja(dlargo);
        VolumenCaja vc2=new VolumenCaja(dlargo,dancho,dprofundidad);
        VolumenCaja vc3=new VolumenCaja(ilargo,iancho,iprofundidad);
        
    }
    
}
