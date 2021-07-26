<?php


//classe conexão

namespace classes;

use mysqli;

class Conexao
{
    public $conexao;
    
public function __construct()
{
    $this->conexao = new mysqli('localhost','root','root','trabalhogildo',3306);
    
    if($this->conexao->connect_errno > 0){
        die($this->conexao->connect_error);
        
    }
    
       
}
    
    public function getConexao()
    {
        return $this->conexao;
    }

   

}

//COnexao ok 

//$conexao = new mysqli('localhost','root','root','trabalhogildo',3306);

//if($conexao->connect_errno > 0){
// die($this->conexao->connect_error);
//}
    
//var_dump($conexao);-->
