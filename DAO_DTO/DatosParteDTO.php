<?php 

class Parte 
{   
	private $_id;
    private $_nombreAlumno;
    private $_motivo;
	private $_fechaQuedada;
	private $_curso;
    private $_horaCita;


    //Getters y setters
    /**
     * @return int
     */
    public function getID()
    {
        return $this->_id;
    }

    public function setID($id)
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getNombreAlumno()
    {
        return $this->_nombreAlumno;
    }

    public function setNombreAlumno($nombreAlumno)
    {
        $this->_nombreAlumno = $nombreAlumno;
    }

    /**
     * @return string
     */
    public function getMotivo()
    {
        return $this->_motivo;
    }

    public function setMotivo($motivo)
    {
        $this->_motivo = $motivo;
    }

	/**
     * @return date
     */
    public function getFechaQuedada()
    {
        return $this->_fechaQuedada;
    }

    public function setFechaQuedada($fechaQuedada)
    {
        $this->_fechaQuedada = $fechaQuedada;
    }

	/**
     * @return string
     */
    public function getCurso()
    {
        return $this->_curso;
    }

    public function setCurso($curso)
    {
        $this->_curso = $curso;
    }

    /**
     * @return string
     */
    public function getHoraCita()
    {
        return $this->_horaCita;
    }

    public function setHoraCita($horaCita)
    {
        $this->_horaCita = $horaCita;
    }

}

?>