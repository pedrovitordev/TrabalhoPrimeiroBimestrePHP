<?php

namespace classes;

use Pessoa;

class Paciente extends Pessoa
{

    private int $idpaciente;
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $nascimento;


    public function cadastrar(){

    }
    public function consultar(){

    }

    function __construct($nome, $cpf, $telefone, $nascimento)
    {
        $this->nomeM = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->nascimento = $nascimento;
    }

    /**
     * Get the value of nome
     */ 
    public function getNomeM()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNomeM($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of nascimento
     */ 
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @return  self
     */ 
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    /**
     * Get the value of idpaciente
     */ 
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }

    /**
     * Set the value of idpaciente
     *
     * @return  self
     */ 
    public function setIdpaciente($idpaciente)
    {
        $this->idpaciente = $idpaciente;

        return $this;
    }
}