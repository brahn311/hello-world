/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia2programa5;

import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;
import java.util.List;

/**
 *
 * @author Participante
 */
public class ArreglosLista {
    private static final String [] colores={"Magenta","Rojo","Azul","Amarillo","Blanco","Verde"};
    private static final String [] eliminarColores={"Rojo","Blanco","Azul"};
    
    //crea objeto array list, agregar colores y manupula
    public ArreglosLista() {
        List<String> lista=new ArrayList<String>(); 
        List<String> eliminarLista=new ArrayList<String>(); 
        
        for(String color:colores){
            lista.add(color);
        }
        for(String color:eliminarColores){
            eliminarLista.add(color);
        }
        
        for (int cuenta=0;cuenta<lista.size();cuenta++){
            System.out.printf("%s", lista.get(cuenta));
        }
        
        eliminarColores(lista,eliminarLista);
        
        System.out.println("\n\nArrayList despues de llamar a eliminarColores");
        
        for (String color:lista){
            System.out.printf("%s", color);
        }
        
    }
        private void eliminarColores(Collection<String> collection1,Collection<String> collection2) {
            Iterator<String> iterador=collection1.iterator();
            
            while(iterador.hasNext()){
                if (collection2.contains(iterador.next())){
                    iterador.remove();
                }
            }
        }
}
