/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dia3programafinal;

/**
 *
 * @author Instructor
 */
public class Falla {
    private int codFalla;
    private String descripcionFalla;

    public Falla(int codFalla, String descripcionFalla) {
        this.codFalla = codFalla;
        this.descripcionFalla = descripcionFalla;
    }

    public Falla() {
    }

    /**
     * @return the codFalla
     */
    public int getCodFalla() {
        return codFalla;
    }

    /**
     * @param codFalla the codFalla to set
     */
    public void setCodFalla(int codFalla) {
        this.codFalla = codFalla;
    }

    /**
     * @return the descripcionFalla
     */
    public String getDescripcionFalla() {
        return descripcionFalla;
    }

    /**
     * @param descripcionFalla the descripcionFalla to set
     */
    public void setDescripcionFalla(String descripcionFalla) {
        this.descripcionFalla = descripcionFalla;
    }
}
