<?php

require_once 'parts/inicializacao.php';

    $sql = " SELECT c.data, c.hora, p.nome, c.motivo, c.historico  
            FROM consulta c inner join paciente p on c.idpaciente = p.idpaciente
            WHERE c.data = curdate();"; //pegar todos elementos (fez o select) pegar id do medico


    if (!$result = $db->query($sql)) :    //mandando para o banco, só vai aparecer a tabela se acessar o banco de dados
        echo 'Ocorreu um erro ao acessar a base de dados: ' . $db->error; //pegou o resultado
    else :
        ?>
        <!-- Se existir ele vai criar o resultado da tabela-->
        <table border="1">
            <tr>

                <th>Data:</th>
                <th>Hora:</th>
                <th>Paciente:</th>
                <th>Motido:</th>
                <th>Historico</th>

            </tr>
            <!-- Criando lista do bda na tabela fetch_assco pega um por um-->
            <?php
            while ($row = $result->fetch_object()) : //colocar classe q quer usar, namespace mais o nome da classe
                ?>
                <tr>

                    <td> <?= $row->data ?></td>
                    <td> <?= $row->hora ?></td>
                    <td> <?= $row->nome ?></td>
                    <td> <?= $row->motivo ?></td>
                    <td> <?= $row->historico ?></td>

                </tr>
            <?php
            endwhile;
            ?>
        </table>
    <?php
    endif;
