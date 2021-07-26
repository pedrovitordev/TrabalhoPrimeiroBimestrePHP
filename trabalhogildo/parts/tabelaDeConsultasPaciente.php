<?php

require_once 'inicializacao.php';


if (isset($_POST['consultar'])) :

    $id = $_POST['paciente'];
    $sql = "select `trabalhogildo`.`paciente`.*, `c`.`data`, `c`.`motivo`, `c`.`historico`, `c`.`hora`
            from `trabalhogildo`.`paciente` inner join `trabalhogildo`.`consulta` c on `paciente`.`idpaciente` = `c`.`idpaciente`
            where `paciente`.`idpaciente`= $id ;"; //pegar todos elementos (fez o select) pegar id do medico


    if (!$result = $db->query($sql)) :    //mandando para o banco, só vai aparecer a tabela se acessar o banco de dados
        echo 'Ocorreu um erro ao acessar a base de dados: ' . $db->error; //pegou o resultado
    else :
?>
        <!-- Se existir ele vai criar o resultado da tabela-->
        <table border="1">
            <tr>

                <th>Nome:</th>
                <th>Data:</th>
                <th>Hora:</th>
                <th>Motivo</th>
                <th>Historico</th>

            </tr>
            <!-- Criando lista do bda na tabela fetch_assco pega um por um-->
            <?php
            while ($row = $result->fetch_object()) : //colocar classe q quer usar, namespace mais o nome da classe
            ?>
                <tr>

                    <td> <?= $row->nome ?></td>
                    <td> <?= $row->data ?></td>
                    <td> <?= $row->hora ?></td>
                    <td> <?= $row->motivo ?></td>
                    <td> <?= $row->historico ?></td>

                </tr>
            <?php
            endwhile;
            ?>
        </table>
<?php
    endif;
endif;
