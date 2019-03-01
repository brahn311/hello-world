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
public class Trabajador {
    private int codTrabador;
    private String nombreTrabador;
    private String apellidoTrabador;

    public Trabajador(int codTrabador, String nombreTrabador, String apellidoTrabador) {
        this.codTrabador = codTrabador;
        this.nombreTrabador = nombreTrabador;
        this.apellidoTrabador = apellidoTrabador;
    }

    public Trabajador() {
    }

    /**
     * @return the codTrabador
     */
    public int getCodTrabador() {
        return codTrabador;
    }

    /**
     * @param codTrabador the codTrabador to set
     */
    public void setCodTrabador(int codTrabador) {
        this.codTrabador = codTrabador;
    }

    /**
     * @return the nombreTrabador
     */
    public String getNombreTrabador() {
        return nombreTrabador;
    }

    /**
     * @param nombreTrabador the nombreTrabador to set
     */
    public void setNombreTrabador(String nombreTrabador) {
        this.nombreTrabador = nombreTrabador;
    }

    /**
     * @return the apellidoTrabador
     */
    public String getApellidoTrabador() {
        return apellidoTrabador;
    }

    /**
     * @param apellidoTrabador the apellidoTrabador to set
     */
    public void setApellidoTrabador(String apellidoTrabador) {
        this.apellidoTrabador = apellidoTrabador;
    }
}
