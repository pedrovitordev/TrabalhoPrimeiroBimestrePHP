<?php

require_once 'parts/inicializacao.php';

?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="form.css" media="screen">

    <title>Agendar</title>
</head>

<body>

    <div>
        <h1 id="titulo">Agendar consulta</h1><br>
        <p id="subtitulo">Complete as informações</p>
        <br>
    </div><br>

    <!-- Início do formulário -->
    <form action="" method="post">

        <fieldset class="grupo">
            <div class="campo">
                <label for="paciente"><strong>Paciente</strong></label>
                <select id="paciente" name="paciente" required>
                    <option selected>Selecione</option>
                    <?php

                    $sql = 'SELECT * FROM `trabalhogildo`.`paciente`;';           //Pegando os dados do banco populado no sql

                    if (!$result = $db->query($sql)) :
                        echo 'Erro a acessar a base: ' . $database->error;
                    else :
                        while ($row = $result->fetch_object()) :
                    ?>
                            <option value="<?= $row->idpaciente; ?>"> <?= $row->nome; ?> </option> <!-- Passando os value e pegando o nomes dos pacientes no populado-->
                    <?php

                        endwhile;
                    endif;
                    ?>
                </select>
            </div>

            <div class="campo">
                <label for="data"><strong>Data</strong></label>
                <input type="date" name="data" id="data" required>
            </div>
        </fieldset>


        <div class="campo">
            <label for="hora"><strong>Hora</strong></label>
            <input type="text" name="hora" id="hora" required>
        </div>
        </fieldset>

        <div class="campo">
            <label for="medico"><strong>Medico</strong></label>
            <select id="medico" name="medico" required>
                <option selected>Selecione</option>
                <?php

                $sql = 'SELECT * FROM `trabalhogildo`.`medico`;';           //Pegando os dados do banco populado no sql

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

        <div class="campo">
            <br>
            <label for="motivo"><strong>Motivo: </strong></label>
            <textarea rows="6" style="width: 26em" id="motivo" name="motivo"></textarea>
        </div>

        <div class="campo">
            <label for="historico"><strong>Historico</strong></label>
            <input type="text" name="historico" id="historico" required>
        </div>
        <!-- Botão para enviar o formulário -->
        <input type="submit" name="agendar" value="Agendar"><br>
        <a href="ListaConsultaMedico.php">Ver consultas por Médico</a><br>
        <a href="ListaConsultaPaciente.php">Ver consultas por Paciente</a><br>
        <a href="ListaConsultaData.php">Ver consultas por Data</a>



    </form>




</body>

</html>