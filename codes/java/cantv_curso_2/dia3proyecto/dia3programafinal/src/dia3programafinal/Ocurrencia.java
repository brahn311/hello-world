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
public class Ocurrencia {
    private int codOcurrencia;
    private int codFalla;
    private String fechaOcurrencia;
    private String fechaReparacion;
    private int codTrabajador;
    private String estatus;

    public Ocurrencia(int codOcurrencia, int codFalla, String fechaOcurrencia, String fechaReparacion, int codTrabajador, String estatus) {
        this.codOcurrencia = codOcurrencia;
        this.codFalla = codFalla;
        this.fechaOcurrencia = fechaOcurrencia;
        this.fechaReparacion = fechaReparacion;
        this.codTrabajador = codTrabajador;
        this.estatus = estatus;
    }

    public Ocurrencia() {
    }

    /**
     * @return the codOcurrencia
     */
    public int getCodOcurrencia() {
        return codOcurrencia;
    }

    /**
     * @param codOcurrencia the codOcurrencia to set
     */
    public void setCodOcurrencia(int codOcurrencia) {
        this.codOcurrencia = codOcurrencia;
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
     * @return the codTrabajador
     */
    public int getCodTrabajador() {
        return codTrabajador;
    }

    /**
     * @param codTrabajador the codTrabajador to set
     */
    public void setCodTrabajador(int codTrabajador) {
        this.codTrabajador = codTrabajador;
    }

    /**
     * @return the fechaOcurrencia
     */
    public String getFechaOcurrencia() {
        return fechaOcurrencia;
    }

    /**
     * @param fechaOcurrencia the fechaOcurrencia to set
     */
    public void setFechaOcurrencia(String fechaOcurrencia) {
        this.fechaOcurrencia = fechaOcurrencia;
    }

    /**
     * @return the fechaReparacion
     */
    public String getFechaReparacion() {
        return fechaReparacion;
    }

    /**
     * @param fechaReparacion the fechaReparacion to set
     */
    public void setFechaReparacion(String fechaReparacion) {
        this.fechaReparacion = fechaReparacion;
    }

    /**
     * @return the estatus
     */
    public String getEstatus() {
        return estatus;
    }

    /**
     * @param estatus the estatus to set
     */
    public void setEstatus(String estatus) {
        this.estatus = estatus;
    }
    
    
    
}
