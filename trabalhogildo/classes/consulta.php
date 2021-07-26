<?php


namespace classes;

use Cassandra\Date;
use classes\Medico;
use classes\Paciente;

class Consulta
{
    private Date $data;
    private string $hora;
    private $medico;  //Adicionar medico
    private $paciente; //Adicionar paciente
    private string $motivo;
    private string $historico;

    
    public function adcPaciente(Paciente $objPac) //Adicionando medicos
    {
        $this->paciente[] = $objPac;

    }

    public function adcMedico(Medico $objMed) //Adicionando medicos
    {
        $this->medico[] = $objMed;

    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of hora
     */ 
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     *
     * @return  self
     */ 
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get the value of motivo
     */ 
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of motivo
     *
     * @return  self
     */ 
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get the value of historico
     */ 
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * Set the value of historico
     *
     * @return  self
     */ 
    public function setHistorico($historico)
    {
        $this->historico = $historico;

        return $this;
    }

    /**
     * Get the value of medico
     */ 
    public function getMedico()
    {
        return $this->medico;
    }

    /**
     * Get the value of paciente
     */ 
    public function getPaciente()
    {
        return $this->paciente;
    }

    //METODOS DA CLASSE

    //marcar,cancelar,consultar,atualizar.

    public function Marcar()
    {

    }

    public function Consultar()
    {
        
    }

    public function Cancelar()
    {
        
    }

    public function Atualizar()
    {
        
    }




}