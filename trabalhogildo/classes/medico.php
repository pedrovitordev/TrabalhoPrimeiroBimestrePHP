<?php

namespace classes;
use Pessoa;

class Medico extends Pessoa
{   
    

    private int $idmedico;
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $nascimento;
    private string $cnm;
    private string $especialidade;
    private int $senha;



    public function cadastrar(){
        
    }
    public function consultar(){

    }





    function __construct($nome, $cpf, $telefone, $nascimento, $cnm, $especialidade, $senha)
    {
        
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->nascimento = $nascimento;
        $this->cnm = $cnm;
        $this->especialidade = $especialidade;
        $this->senha = $senha;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nomeM;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
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
     * Get the value of cnm
     */ 
    public function getCnm()
    {
        return $this->cnm;
    }

    /**
     * Set the value of cnm
     *
     * @return  self
     */ 
    public function setCnm($cnm)
    {
        $this->cnm = $cnm;

        return $this;
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of idmedico
     */ 
    public function getIdmedico()
    {
        return $this->idmedico;
    }

    /**
     * Set the value of idmedico
     *
     * @return  self
     */ 
    public function setIdmedico($idmedico)
    {
        $this->idmedico = $idmedico;

        return $this;
    }
}