<?php

require_once 'parts/inicializacao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="form.css" media="screen">
    <title>Qtd consulta medico</title>
</head>

<body>
    <div>
        <h1 id="titulo">Consulta medico</h1><br>
        <p id="subtitulo">Complete as informações</p>
        <br>
    </div><br>

    <!-- Início do formulário -->
    <form action="ListaConsultaMedico.php" method="post">

        <div class="campo">
            <label for="medico"><strong>Medico</strong></label>
            <select id="medico" name="medico" required>
                <option selected>Selecione</option>
                <?php

                $sql = 'SELECT * FROM `trabalhogildo`.`medico`;';      //Pegando os dados do banco populado no sql

                if (!$result = $db->query($sql)) :
                    echo 'Erro a acessar a base: ' . $db->error;
                else :
                    while ($row = $result->fetch_object()) :
                ?>
                        <option value="<?= $row->idmedico; ?>"> <?= $row->nome; ?> </option> <!-- Passando os value e pegando o nomes dos medicos no populado-->                      
                <?php
                    endwhile;
                    
                endif;
                ?>
            </select>
        </div>

        <!-- Botão para enviar o formulário -->
        

        <input type="submit" name="consultar"  value="Consultar">
         
    </form>
    <br>
<p>


<?php 
    include_once 'parts/tabelaDeConsultasMedico.php';  //tudo que inscrever no arquivo tabelaDeRecados.php vai aparecer aqui em baixo
?>

</p>


</body>



</html>