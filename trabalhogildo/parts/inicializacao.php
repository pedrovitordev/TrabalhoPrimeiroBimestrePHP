<?php
spl_autoload_register(function ($class) {

  $arquivo = str_replace('\\', '/', $class) . '.php';
  if (file_exists($arquivo)) :
    require_once $arquivo;
  else :
    die('Arquivo não encontrado:' . $arquivo);
  endif;
});


//require_once 'classes\conexao.php';

use classes\Conexao;

$conexao = new Conexao();
$db = $conexao->getConexao();

//Usuário preencheu os dados para agendar
if (isset($_POST['agendar'])) :   //ok


  //echo 'Clicou em agendar'; //ok


  $data = $_POST['data'];
  $hora = $_POST['hora'];
  $idmedico = $_POST['medico'];
  $idpaciente = $_POST['paciente'];
  $motivo = $_POST['motivo'];
  $historico = $_POST['historico'];


  $sql = "INSERT INTO `trabalhogildo`.`consulta` (`data`, `hora`, `idmedico`, `idpaciente`, `motivo`, `historico`) VALUES ('$data', '$hora', $idmedico, $idpaciente, '$motivo', '$historico');";

  // echo $sql; (consulta ok)

  if (!$result = $db->query($sql)) :
    echo 'Erro a acessar ao inserir: ' . $db->error;

  else :
    echo 'Agendamento da consulta realizado com sucesso: ' . 
    
    $db->error;
  endif;
endif;









